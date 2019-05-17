<?php

namespace App\Http\Controllers;

use App\Loans;
use App\LoansTypes;
use App\SubWallet;
use Illuminate\Http\Request;
use DB;
class LoansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Loans::join('sub_wallets','sub_wallets.id','=','loans.wallet_Id')->get();
        $loanstype = SubWallet::all();
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
            'agentName' => 'required',
            'wallet_Id' => 'required',
            'installmentsNum' => 'required',
            'Gender' => 'required',
            'age' => 'required',
            'identityNo' => 'required',
            'phoneNo' => 'required',
            'loanAmount' => 'required',
        ],
            $messsages = array(
                'agentName.required'=>'يجب كتابة الاسم',
                'wallet_Id.required'=>'يجب اختيار المحفظة',
                'installmentsNum.required'=>'يجب كتابة عدد الاقساط ',
                'Gender.required'=>'يجب اختيار الجنس',
                'age.required'=>'يجب كتابة العمر',
                'identityNo.required'=>'يجب كتابة رقم الهوية',
                'phoneNo.required'=>'يجب كتابة رقم الجوال',
                'loanAmount.required'=>'يجب كتابة قيمة القرض',
            )

        );
        $J = DB::table('loans')->orderby('id', 'DESC')->first();
        if (isset($J)) {
            $b = 1 + $J->id;
        } else {
            $b = 1 + 0;
        };

        $key = '1700'.$b;
        $input['loanId'] = $key;
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
