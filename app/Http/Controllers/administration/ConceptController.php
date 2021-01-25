<?php

namespace App\Http\Controllers\administration;

use App\Http\Controllers\Controller;
use App\Models\Concept;
use Illuminate\Http\Request;

class ConceptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $concepts = Concept::all();
        return view('administration.concept.index', compact('concepts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administration.concept.create');
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
            'clasification'=>'required',
            'name' => 'required',
            'description' => 'required',
        ]);
    
        Concept::create($request->all());
     
        return redirect()->route('concepto.index')
                        ->with('success','El concepto se ha creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Concept  $concept
     * @return \Illuminate\Http\Response
     */
    public function show(Concept $concept)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Concept  $concept
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $concept = Concept::find($id);
        $types = ['EGRESO','INGRESO'];
        return view('administration.concept.edit', compact('concept','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Concept  $concept
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $concept = $request->validate([
            'clasification'=>'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        Concept::whereId($id)->update($concept);
        return redirect()->route('concepto.index')
                        ->with('success','El concepto se ha actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Concept  $concept
     * @return \Illuminate\Http\Response
     */
    public function destroy(Concept $concept)
    {
        //
    }
}
