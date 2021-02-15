<?php

namespace App\Http\Controllers\consulting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Patient::all();
        return view('consulting.patient.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consulting.patient.create');
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
            'dni'=>'required|unique:patients',
            'firstname' => 'required',
            'lastname' => 'required',
            'birth'=>'required',
            'sex'=>'required',
            'phone'=>'required|numeric',
            'email'=>'required|email',
        ]);

        Patient::create($request->all());
     
        return redirect()->route('paciente.index')
                        ->with('success','El paciente se ha creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('consulting.patient.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Patient::find($id);
        return view('consulting.patient.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hola = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'birth'=>'required',
            'sex'=>'required',
            'phone'=>'required|numeric',
            'email'=>'required|email',
            'apoderado'=>'',
            'address'=>''
        ]);

        Patient::whereId($id)->update($hola);
        return redirect()->route('paciente.index')
                        ->with('success','El paciente se ha actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
