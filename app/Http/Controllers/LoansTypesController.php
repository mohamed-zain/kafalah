<?php

namespace App\Http\Controllers;

use App\LoansTypes;
use Illuminate\Http\Request;

class LoansTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = LoansTypes::all();
        return view('systemData.LoansType.index',compact('data'));
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
     * @param  \App\LoansTypes  $loansTypes
     * @return \Illuminate\Http\Response
     */
    public function show(LoansTypes $loansTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LoansTypes  $loansTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(LoansTypes $loansTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LoansTypes  $loansTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoansTypes $loansTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LoansTypes  $loansTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoansTypes $loansTypes)
    {
        //
    }
}
