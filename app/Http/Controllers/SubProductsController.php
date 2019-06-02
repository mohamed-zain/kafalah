<?php

namespace App\Http\Controllers;

use App\SubProducts;
use Illuminate\Http\Request;

class SubProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $input=  $request->except('_token');
        //dd($input);
        $this->validate($request, [
            'SubID' => 'required',
            'LoantypeID' => 'required',
            'Balance' => 'required',
            'LoanCount' => 'required',
        ]);
        $c = SubProducts::where('SubID','=',$request->SubID)
            ->where('LoantypeID','=',$request->LoantypeID)
            ->first();
        if ($c){
            \Session::flash('Flash', 'هذا المنتج موجود');
            return redirect()->back();
        }else{
            \Session::flash('Flash', 'تم  اضافة المسار بنجاح');
            SubProducts::create($input);
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubProducts  $subProducts
     * @return \Illuminate\Http\Response
     */
    public function show(SubProducts $subProducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubProducts  $subProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(SubProducts $subProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubProducts  $subProducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubProducts $subProducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubProducts  $subProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubProducts $subProducts)
    {
        //
    }
}
