<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubWallet extends Model
{
    protected $table = 'sub_wallets';
    protected $fillable = [
        'wallet_Id',
        'name',
        'financing_Ceiling',
        'sponsorship_Rate',
        'repayment_Period',
        'Balance',
        'prodects',
    ];
}
