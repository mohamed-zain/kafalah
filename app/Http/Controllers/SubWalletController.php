<?php

namespace App\Http\Controllers;

use App\SubWallet;
use Illuminate\Http\Request;

class SubWalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SubWallet::all();
        return view('subwallets.index',compact('data'));
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
        $input = $request->all();
        $this->validate($request, [
            'name' => 'required',
            'financing_Ceiling' => 'required',
            'sponsorship_Rate' => 'required',
            'repayment_Period' => 'required',
            'Balance' => 'required',
            'prodects' => 'required',
        ]);
        \Session::flash('Flash', 'تم ارسال الطلب لادارة الجمعية');
        SubWallet::create($input);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubWallet  $subWallet
     * @return \Illuminate\Http\Response
     */
    public function show(SubWallet $subWallet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubWallet  $subWallet
     * @return \Illuminate\Http\Response
     */
    public function edit(SubWallet $subWallet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubWallet  $subWallet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubWallet $subWallet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubWallet  $subWallet
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubWallet $subWallet)
    {
        //
    }
}
