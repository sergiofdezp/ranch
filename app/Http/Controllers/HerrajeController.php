<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Herraje;

class HerrajeController extends Controller
{
    public function __construct(){
        $this->middleware('can:herraje.index')->only('index');
        $this->middleware('can:herraje.create')->only('create', 'store');
        $this->middleware('can:herraje.edit')->only('edit', 'update');
        $this->middleware('can:herraje.destroy')->only('destroy');
    }

    public function index()
    {
        $herrajes = Herraje::all();

        return view('herrajes.index', compact('herrajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $herrajes = Herraje::all();

        return view('herraje.create', compact('herrajes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $herrajes = $request->all();

        Herraje::create($herrajes);

        return redirect()->route('herraje.index')->with('message', 'El herraje ha sido añadido correctamente.');
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
    public function edit(Herraje $herraje)
    {
        return view('herrajes.edit', compact('herraje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Herraje $herraje)
    {
        $hors = $request->all();
        $herraje->update($hors);
        
        return redirect()->route('herraje.index')->with('message', 'La '. $herraje->nombre .' ha sido editado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Herraje $herraje)
    {
        $herraje->delete();
        
        return redirect()->route('herraje.index')->with('message', 'El '. $herraje->nombre .' ha sido eliminado correctamente.');
    }
}
