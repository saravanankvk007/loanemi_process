<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoanDetailsController extends Controller
{
    //
	
	public function index()
	{
		$loanDetails = DB::table('loan_details')->get();
		return view('loan/loan-details', compact('loanDetails'));
	}


}
