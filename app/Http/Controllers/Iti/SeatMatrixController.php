<?php

namespace App\Http\Controllers\Iti;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeatMatrixController extends Controller
{
     public function index(){
        return view('modules.iti.seatmatrix.seatmatrix');
    }

    public function show($tradeId){

    }
}
