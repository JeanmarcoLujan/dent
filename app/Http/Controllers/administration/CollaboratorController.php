<?php

namespace App\Http\Controllers\administration;

use App\Http\Controllers\Controller;
use App\Models\Collaborator;
use App\Models\Specialty;
use Illuminate\Http\Request;


class CollaboratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collaborators = Collaborator::all();
        return view('administration.collaborator.index', compact('collaborators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialties = Specialty::all();
        return view('administration.collaborator.create', compact('specialties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'dni'=>'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'phone'=>'required|numeric',
            'email'=>'required|email',
            'specialty_id'=>'required',
        ]);

        $request->status = $request->has('status') ? 1 : 0;

        Collaborator::create($request->all());
     
        return redirect()->route('colaborador.index')
                        ->with('success','El colaborador se ha creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collaborator  $collaborator
     * @return \Illuminate\Http\Response
     */
    public function show(Collaborator $collaborator)
    {
        return view('administration.collaborator.show', compact('collaborator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collaborator  $collaborator
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collaborator = Collaborator::find($id);
        $specialties = Specialty::all();
        return view('administration.collaborator.edit', compact('collaborator','specialties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collaborator  $collaborator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $hola = $request->validate([
            'dni'=>'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'phone'=>'required|numeric',
            'email'=>'required|email',
            'specialty_id'=>'required',
        ]);

        
        $hola['status']=$request->status = $request->has('status') ? 1 : 0;

        Collaborator::whereId($id)->update($hola);
        return redirect()->route('colaborador.index')
                        ->with('success','El colaborador se ha actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collaborator  $collaborator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collaborator $collaborator)
    {
        //
    }
}
