<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;

class autoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("autos.index",['autos'=>Auto::latest()->paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Auto $auto)
    {
        return view('autos.create',['auto'=>$auto]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Auto $auto)
    {
        $auto->create([
            'marca'=>$request->marca,
            'titular_id'=>$request->titular_id,
            'modelo'=>$request->modelo,
            'patente'=>$request->patente,
            'tipo'=>$request->tipo,
        ]);
        return redirect()->route('auto.index');   
    }

    /**
     * Display the specified resource.
     */
    public function show(Auto $auto)
    {
        return view('autos.show',compact('auto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Auto $auto)
    {
        
        return view('autos.edit',compact('auto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auto $auto)
    {
        // echo $request->marca;
        // exit();
        $auto->update([
            'marca'=>$request->marca,
            'titular_id'=>$request->titular_id,
            'modelo'=>$request->modelo,
            'patente'=>$request->patente,
            'tipo'=>$request->tipo,
        ]);
        return redirect()->route('auto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auto $auto)
    {
        
        // var_dump($auto);
        // exit();

        $auto->delete();
        return redirect()->route('auto.index');
    }
}
