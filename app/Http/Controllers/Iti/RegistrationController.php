<?php

namespace App\Http\Controllers\Iti;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view('modules.iti.registration.index');
    }

    // public function show($tradeId){
    //     $trade = [
    //         'id' => $tradeId,
    //         'name' => 'Electrician',
    //         'type' => 'NCVT'
    //     ];

    //     $trainees = [
    //         'pending' => [
    //             ['name' => 'Aamir Khan', 'dob' => '2001-05-12', 'gender' => 'Male', 'mobile' => '9876543210'],
    //         ],
    //         'verified' => [
    //             ['name' => 'Sana Malik', 'dob' => '2000-02-20', 'gender' => 'Female', 'mobile' => '9876501234'],
    //         ],
    //         'rejected' => [
    //             ['name' => 'Rahul Verma', 'dob' => '1999-09-09', 'gender' => 'Male', 'mobile' => '9123456789'],
    //         ],
    //     ];

    //     return view('modules.iti.registration.show', compact('trade', 'trainees'));
    // }


    // public function add($tradeId){
    //     // Just mock trade info for now
    //     $trade = [
    //         'id'   => $tradeId,
    //         'name' => 'Electrician',
    //         'type' => 'NCVT'
    //     ];

    //     return view('modules.iti.registration.add', compact('trade'));
    // }


    // public function finalize($id){
    //     $registration = Registration::findOrFail($id);

    //     // mark finalized (e.g., is_finalized = true)
    //     $registration->is_finalized = true;
    //     $registration->save();

    //     return redirect()->route('iti.registration.index')
    //                     ->with('success', 'Registration finalized successfully.');
    // }
}
