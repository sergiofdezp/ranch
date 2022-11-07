<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horse;
use Auth;

class HorseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if($user->name == 'superadmin'){
            $horses = Horse::all();
        } else{
            $horses = Horse::where('id', auth()->id())->get();
        }
        return view('horses.index', compact('horses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('horses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horse = $request->all();
        if($imagen = $request->file('imagen')) {
            $rutaGuardarImg = 'imagen/horses/';
            $imagenHorse = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenHorse);
            $horse['imagen'] = "$imagenHorse";             
        }
        
        Horse::create($horse);
        return redirect()->route('horses.index')->with('message', 'El caballo ha sido añadido correctamente.');
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
    public function edit(Horse $horse)
    {
        return view('horses.edit', compact('horse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horse $horse)
    {
        $hors = $request->all();
        if($imagen = $request->file('imagen')){
           $rutaGuardarImg = 'imagen/horses/';
           $imagenHorse = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
           $imagen->move($rutaGuardarImg, $imagenHorse);
           $hors['imagen'] = "$imagenHorse";
        }else{
           unset($hors['imagen']);
        }
        $horse->update($hors);
        
        return redirect()->route('horses.index')->with('message', 'El caballo '. $horse->nombre .' ha sido editado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horse $horse)
    {
        $horse->delete();
        
        return redirect()->route('horses.index')->with('message', 'El caballo '. $horse->nombre .' ha sido eliminado correctamente.');
    }
}
