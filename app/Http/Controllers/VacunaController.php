<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacuna;

class VacunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacunas = Vacuna::all();

        return view('vacunas.index', compact('vacunas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vacunas = Vacuna::all();

        return view('vacunas.create', compact('vacunas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vacunas = $request->all();

        Vacuna::create($vacunas);

        return redirect()->route('vacunas.index')->with('message', 'La vacuna ha sido añadida correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacuna $vacuna)
    {
        return view('vacunas.edit', compact('vacuna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacuna $vacuna)
    {
        $hors = $request->all();
        $vacuna->update($hors);
        
        return redirect()->route('vacunas.index')->with('message', 'La vacuna '. $vacuna->nombre .' ha sido editada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacuna $vacuna)
    {
        $vacuna->delete();
        
        return redirect()->route('vacunas.index')->with('message', 'La vacuna '. $vacuna->nombre .' ha sido eliminada correctamente.');
    }
}
