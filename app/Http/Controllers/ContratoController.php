<?php

namespace App\Http\Controllers;

use App\contrato;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=contrato::all(); 
        return  view('pdf.doc', $data);
    }
    public function data(Request $id)
    {
        
        $data=contrato::all()->where('id','=',$id->id); 
        return $data;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function show(contrato $contrato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function edit(contrato $contrato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contrato $contrato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy(contrato $contrato)
    {
        //
    }
}
