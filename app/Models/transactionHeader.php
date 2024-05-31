<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactionHeader extends Model
{
    use HasFactory;
    

    protected $table = 'TransactionHeader';

    protected $filled = [
        'BRANCHID',
        'OUTLETID',
        'TERMID',
        'DATE',
        'ID',
        'SHIFT',
        'TIME',
        'USER',
        'INVNO',
        'TOTAL',
        'INFO',
        'POSTED',
        'CUSTOMERID',
        'CUSTOMERCODE',
        'CUSTOMERNAME',
        'DINEIN',
        'POINTSEARNED',
        'RESETTER',
        'CUSTTYPE',
        'SCNAME',
        'SCADDRESS',
        'SCID',
        'TRANSNO',
        'TRANSTYPE',
        'HEADCNT',
        'SCCNT',
        'ATTENDANT',
        'ORDERSLIPNO',
        'OCCNT',
        'PWDCNT',
        'TABLEID',
        'REF1',
        'REF2',
        'REF3',
        'TRHID',
        'BUSSDATE',
        'TURNOVERID',
        'UPLOADED',
        'TRDCOUNT',
        'UPCOUNT',
        'REF4',
        'REF5',
        'ISZERORATED'


    ];
}
