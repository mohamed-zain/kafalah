<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubProducts extends Model
{
    protected $table = 'sub_products';
    protected $fillable = [
        'SubID',
        'LoantypeID',
        'LoanCount',
        'Balance'
    ];
}
