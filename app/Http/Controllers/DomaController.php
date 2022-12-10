<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doma;

class DomaController extends Controller
{
    public function __construct(){
        $this->middleware('can:domas.index')->only('index');
        $this->middleware('can:domas.create')->only('create', 'store');
        $this->middleware('can:domas.edit')->only('edit', 'update');
        $this->middleware('can:domas.destroy')->only('destroy');
    }

    public function index()
    {
        $domas = Doma::all();

        return view('domas.index', compact('domas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $domas = Doma::all();

        return view('domas.create', compact('domas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $domas = $request->all();

        Doma::create($domas);

        return redirect()->route('domas.index')->with('message', 'La doma ha sido añadida correctamente.');
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
    public function edit(Doma $doma)
    {
        return view('domas.edit', compact('doma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doma $doma)
    {
        $hors = $request->all();
        $doma->update($hors);
        
        return redirect()->route('domas.index')->with('message', 'La '. $doma->nombre .' ha sido editada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doma $doma)
    {
        $doma->delete();
        
        return redirect()->route('domas.index')->with('message', 'La '. $doma->nombre .' ha sido eliminada correctamente.');
    }
}
