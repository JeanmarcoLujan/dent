<?php

namespace App\Http\Controllers\administration;

use App\Http\Controllers\Controller;
use App\Models\Diagnostic;
use Illuminate\Http\Request;

class DiagnosticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagnostics = Diagnostic::all();
        return view('administration.diagnostic.index', compact('diagnostics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administration.diagnostic.create');
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
            'code' => 'required',
            'description' => 'required',
        ]);
    
        Diagnostic::create($request->all());
     
        return redirect()->route('diagnostico.index')
                        ->with('success','El diagnóstico se ha creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diagnostic  $diagnostic
     * @return \Illuminate\Http\Response
     */
    public function show(Diagnostic $diagnostic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diagnostic  $diagnostic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diagnostic = Diagnostic::find($id);
        return view('administration.diagnostic.edit', compact('diagnostic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diagnostic  $diagnostic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $diagnostic = $request->validate([
            'code' => 'required',
            'description' => 'required',
        ]);

        Diagnostic::whereId($id)->update($diagnostic);
        return redirect()->route('diagnostico.index')
                        ->with('success','La diagnóstico se ha actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diagnostic  $diagnostic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diagnostic $diagnostic)
    {
        //
    }
}
