<?php

namespace App\Http\Controllers\accounting;

use App\Http\Controllers\Controller;
use App\Models\Egreso;
use App\Models\Concept;
use Illuminate\Http\Request;

class EgresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $egresos = Egreso::all();
        return view('accounting.egreso.index', compact('egresos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $concepts = Concept::where('clasification', 'EGRESO')->get();
        $code = "EG".substr("000000000".strval(Egreso::count()+1),-6) ;
        return view('accounting.egreso.create', compact('concepts', 'code'));
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
            'egreso'=>'required',
            'docdate' => 'required',
            'taxdate' => 'required',
        ]);

        $egreso = Egreso::create($request->all());
        

        foreach ($request->input('concept_id') as $index => $concept) {
            $egreso->edetails()->create([
                'concept_id' => $concept,
                'quantity'  => $request->quantity[$index],
                'amount'  => $request->amount[$index],

            ]);
        }

        return redirect()->route('egreso.index')
                        ->with('success','El egreso se ha creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function show(Egreso $egreso)
    {
        return view('accounting.egreso.show', compact('egreso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Egreso $egreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Egreso $egreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Egreso $egreso)
    {
        //
    }
}
