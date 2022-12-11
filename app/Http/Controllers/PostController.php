<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::all();

        return view('posts.create', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = $request->all();
        if($imagen = $request->file('imagen')) {
            $rutaGuardarImg = 'imagen/posts/';
            $imagenPost = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenPost);
            $posts['imagen'] = "$imagenPost";             
        }
        Post::create($posts);
        return redirect()->route('posts.index')->with('message', 'El post ha sido añadido correctamente.');
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
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $hors = $request->all();
        if($imagen = $request->file('imagen')){
           $rutaGuardarImg = 'imagen/posts/';
           $imagenPost = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
           $imagen->move($rutaGuardarImg, $imagenPost);
           $hors['imagen'] = "$imagenPost";
        }else{
           unset($hors['imagen']);
        }
        $post->update($hors);
        
        return redirect()->route('posts.index')->with('message', 'Post editado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        
        return redirect()->route('posts.index')->with('message', 'Post eliminado correctamente.');
    }
}
