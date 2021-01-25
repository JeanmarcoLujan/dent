<?php

namespace App\Http\Controllers\accounting;

use App\Http\Controllers\Controller;
use App\Models\Ingreso;
use App\Models\Concept;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingresos = Ingreso::all();

        return view('accounting.ingreso.index', compact('ingresos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $concepts = Concept::where('clasification', 'INGRESO')->get();
        $code = "IG".substr("000000000".strval(Ingreso::count()+1),-6) ;
        return view('accounting.ingreso.create', compact('concepts', 'code'));
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
            'ingreso'=>'required',
            'docdate' => 'required',
            'taxdate' => 'required',
        ]);

        $ingreso = Ingreso::create($request->all());
        

        foreach ($request->input('concept_id') as $index => $concept) {
            $ingreso->idetails()->create([
                'concept_id' => $concept,
                'quantity'  => $request->quantity[$index],
                'amount'  => $request->amount[$index],

            ]);
        }

        return redirect()->route('ingreso.index')
                        ->with('success','El ingreso se ha creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function show(Ingreso $ingreso)
    {
        return view('accounting.ingreso.show', compact('ingreso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingreso $ingreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingreso $ingreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingreso $ingreso)
    {
        //
    }
}
