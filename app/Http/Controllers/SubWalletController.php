<?php

namespace App\Http\Controllers;

use App\LoansTypes;
use App\SubProducts;
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
        $loan = LoansTypes::all();

        return view('subwallets.index',compact('data','loan'));
    }

    public function statistic($id)
    {
        $data = SubWallet::where('id','=',$id)->first();
        return view('subwallets.statistic',compact('data'));
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
        \Session::flash('Flash', 'تم انشاء المحفظة بنجاح');
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
    public function update(Request $request, SubWallet $subWallet,$id)
    {
        $input=  $request->except('_method','_token');
        SubWallet::where('id','=',$id)->update($input);
        \Session::flash('Flash', 'تم تعديل البيانات ');
        return redirect('SubWallet');
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
