<?php

namespace App\Http\Controllers;

use App\Loans;
use App\LoansTypes;
use App\SubWallet;
use Illuminate\Http\Request;

class LoansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Loans::all();
        $loanstype = LoansTypes::all();
        $wallet = SubWallet::all();
        return view('loans.index',compact('data','loanstype','wallet'));
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
        //dd($request->all());
        $input = $request->all();
        $this->validate($request, [
            'name' => 'required',
            'financing_Ceiling' => 'required',
            //'sponsorship_Rate' => 'required',
            'repayment_Period' => 'required',
            'Balance' => 'required',
            'prodects' => 'required',
        ],
            $messsages = array(
                'name.required'=>'يجب كتابة الاسم',
                'financing_Ceiling.required'=>'يجب كتابة سقف التمويل',
                //'sponsorship_Rate.required'=>'يجب اختيار الحالة الاجتماعية',
                'repayment_Period.required'=>'يجب كتابة فترة السداد',
                'Balance.required'=>'يجب كتابة قيمة القرض',
                'prodects.required'=>'يجب اختيار القطاع',
            )

        );
        \Session::flash('Flash', 'تم ارسال الطلب لادارة الجمعية');
        Loans::create($input);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Loans  $loans
     * @return \Illuminate\Http\Response
     */
    public function show(Loans $loans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Loans  $loans
     * @return \Illuminate\Http\Response
     */
    public function edit(Loans $loans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loans  $loans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loans $loans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loans  $loans
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loans $loans)
    {
        //
    }
}
