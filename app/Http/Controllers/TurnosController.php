<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\turnos;

class TurnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turnos = turnos::all();

        return $turnos;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $turnos =  new turnos();
        $turnos->date = $request->date;
        $turnos->time = $request->time;
        $turnos->customer = $request->customer;

        $turnos->save(); 

        return $turnos;
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $turnos =  turnos::findOrFail($request->id);
        $turnos->date = $request->date;
        $turnos->time = $request->time;
        $turnos->customer = $request->customer;

        $turnos->save();

        return $turnos;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $turnos = turnos::destroy($request->id);

        return $turnos;
    }
}
