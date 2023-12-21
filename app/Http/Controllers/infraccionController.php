<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infraccion;

class infraccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("infracciones.index",['infracciones'=>Infraccion::latest()->paginate()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Infraccion $infraccion)
    {
        return view('infracciones.create',['infraccion'=>$infraccion]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Infraccion $infraccion)
    {
        $infraccion->create([
            'fecha'=>$request->fecha,   
            'descripcion'=>$request->descripcion,
            'tipo'=>$request->tipo,
            'auto_id'=>$request->auto_id,

        ]);
        return redirect()->route('infracciones.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Infraccion $infraccione)
    {
        return view('infracciones.show',compact('infraccione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($infraccion)
    {
        return view('infracciones.edit',['infraccion'=>Infraccion::find($infraccion)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Infraccion $infraccione)
    {
        // echo $infraccion->desripcion;
        // exit();
        $infraccione->update([
            'fecha'=>$request->fecha,   
            'descripcion'=>$request->descripcion,
            'tipo'=>$request->tipo,
            'auto_id'=>$request->auto_id,

        ]);
        return redirect()->route('infracciones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Infraccion $infraccion)
    {
        
        $infraccion->delete();
        return redirect()->route('infracciones.index');
    }
}
