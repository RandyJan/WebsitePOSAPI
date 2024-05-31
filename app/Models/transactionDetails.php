<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactionDetails extends Model
{
    use HasFactory;

    protected $table  = 'TransactionDetails';

    protected $fillable = [
        'TRHID',
        'LINENO',
        'LINENO',
        'LINK',
        'DESC',
        'COST',
        'PRICE',
        'QTY',
        'VOL',
        'TOTAL',
        'BARCODE',
        'INFO',
        'VAT',
        'VATAMOUNT',
        'POINTSEARNED',
        'REF1',
        'REF2',
        'REF3',
        'REF4',
        'RATE',
        'REF5',
        'INVRATE',
        'INVDISC',
        'AMU',
        'AMUTAX',
        'ADMFEE',
        'POSTMIXID',
        'OLDCOMPID',
        'KD',
        'FOTYPE',
        'ORDERSLIPDETAILSID',
        'PWDCNT',
        'OCCNT',
        'SCCNT',
        'HEADCNT',
        'ISSCPWD',
        'SCPWDVATEXEMPT',
        'SCPWDAMUEXEMPT',
        'SCPWDDISC',
        'INVDISCVATAMT',
        'UNIQUE',
        'UPLOADED',
        'BASEAMT',
        'SCBASEAMT',
        'ITEMDISCRATE',
        'ITEMDISCAMT',
        'ITEMDISCVATAMT',
        'SCPWDSPECIALDISC',
    ];

    protected $timestamps = false;
}
