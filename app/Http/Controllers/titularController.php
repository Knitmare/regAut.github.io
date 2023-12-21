<?php

namespace App\Http\Controllers;

use App\Models\Titular;
use Illuminate\Http\Request;

class titularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("titular.index",['titulares'=>Titular::latest()->paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Titular $titular)
    {
        return view('titular.create',['titular'=>$titular]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Titular $titular)
    {
        $titular->create([
            'apellido'=>$request->apellido,
            'nombre'=>$request->nombre,
            'dni'=>$request->dni,
            'domicilio'=>$request->domicilio,
        ]);
        return redirect()->route('titular.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Titular $titular)
    {
        return view('titular.show',compact('titular'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Titular $titular)
    {
        return view('titular.edit',compact('titular'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Titular $titular)
    {
        $titular->update([
            'apellido'=>$request->apellido,
            'nombre'=>$request->nombre,
            'dni'=>$request->dni,
            'domicilio'=>$request->domicilio,
        ]);
        return redirect()->route('titular.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Titular $titular)
    {
        $titular->delete();
        return redirect()->route('titular.index');
    }
}
