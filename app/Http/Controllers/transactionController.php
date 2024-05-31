<?php

namespace App\Http\Controllers;

use App\Models\transactionDetails;
use Illuminate\Http\Request;
use App\Models\transactionHeader;
use Carbon\Carbon;

class transactionController extends Controller
{
    public function addNewTransaction(Request $request){
        $maxTransID = transactionHeader::max('TRANSNO');
        $nextTransNo = $maxTransID++;
        $date = Carbon::now();
        $header = transactionHeader::insert([
            'BRANCHID'=>$request->BRANCHID,
            'OUTLETID'=>$request->OUTLETID,
            'TERMID'=>$request->TERMID,
            'DATE'=>$date,
            'ID'=>$request->ID,
            'SHIFT'=>$request->SHIFT,
            // 'TIME'=>$request->TIME,
            'USER'=>$request->USER,
            // 'INVNO'=>$request->INVNO,
            'TOTAL'=>$request->TOTAL,
            // 'INFO'=>$request->INFO,
            // 'POSTED'=>$request->POSTED,
            // 'CUSTOMERID'=>$request->CUSTOMERID,
            // 'CUSTOMERCODE'=>$request->CUSTOMERCODE,
            // 'CUSTOMERNAME'=>$request->CUSTOMERNAME,
            // 'DINEIN'=>$request->DINEIN,
            // 'POINTSEARNED'=>$request->POINTSEARNED,
            // 'RESETTER'=>$request->RESETTER,
            // 'CUSTTYPE'=>$request->CUSTTYPE,
            // 'SCNAME'=>$request->SCNAME,
            // 'SCADDRESS'=>$request->SCADDRESS,
            // 'SCID'=>$request->SCID,
            'TRANSNO'=>$nextTransNo,
            // 'TRANSTYPE'=>$request->TRANSTYPE,
            // 'HEADCNT'=>$request->HEADCNT,
            // 'SCCNT'=>$request->SCCNT,
            // 'ATTENDANT'=>$request->ATTENDANT,
            // 'ORDERSLIPNO'=>$request->ORDERSLIPNO,
            // 'OCCNT'=>$request->OCCNT,
            // 'PWDCNT'=>$request->PWDCNT,
            // 'TABLEID'=>$request->TABLEID,
            // 'REF1'=>$request->REF1,
            // 'REF2'=>$request->REF2,
            // 'REF3'=>$request->REF3,
            // 'TRHID'=>$request->TRHID,
            'BUSSDATE'=>$date,
            // 'TURNOVERID'=>$request->TURNOVERID,
            // 'UPLOADED'=>$request->UPLOADED,
            // 'TRDCOUNT'=>$request->TRDCOUNT,
            // 'UPCOUNT'=>$request->UPCOUNT,
            // 'REF4'=>$request->REF4,
            // 'REF5'=>$request->REF5,
            // 'ISZERORATED'=>$request->ISZERORATED,
        ]);
        $data = $request->items;
        foreach($data as $prod){
       transactionDetails::insert([
                'TRHID'=>$prod->TRHID,
                'LINENO'=>$prod->LINENO,
                'SEQ'=>$prod->SEQ,
            ]);
        }
        return response("Success magpahinga ka na!");
    }
}
