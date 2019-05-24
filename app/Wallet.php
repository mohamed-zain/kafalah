<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $table = 'wallets';
    protected $fillable = [
        'Balance',
        'sponsorship_Rate',
        'Custom',
        'not_Customized',
    ];
}
