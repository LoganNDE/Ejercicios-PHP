<?php

namespace App\Http\Controllers;

use App\Models\BiblioCompra;
use Illuminate\Http\Request;

class BiblioCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = BiblioCompra::get();
        return view('tienda.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tienda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'title' => 'required|string|max:64',
            'autor' => 'required|string',
            'portada' => 'required|string|min:6',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric|'
        ]);
        BiblioCompra::create($validateData);
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        $libro = BiblioCompra::findOrFail($id);
        return view('tienda.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $libro = BiblioCompra::findOrFail($id);
        return view('tienda.edit', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        BiblioCompra::findOrFail($id)->update($request->all());
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        BiblioCompra::findOrFail($id)->delete();
        return redirect()->route('index');
    }
}