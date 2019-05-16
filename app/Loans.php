<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
    protected $table = 'loans';
    protected $fillable = [
        'wallet_Id',
        'loanId',
        'agentName',
        'Gender',
        'age',
        'identityNo',
        'phoneNo',
        'loanType',
        'loanAmount',
        'installmentsNum',
    ];
}
