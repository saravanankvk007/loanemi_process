<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Schema;


class EMIController extends Controller
{
    //
	public function index()
	{
		//DB::statement("CREATE TABLE emi_details (clientid INT)");
		
		if (Schema::hasTable('emi_details')) {
			
			$emiDetails = DB::table('emi_details')->get();
			
		} else {
			$emiDetails = [];
		}
		return view('loan/emi', compact('emiDetails'));
	}

	public function processData()
	{
		// Drop and recreate emi_details table
		DB::statement('DROP TABLE IF EXISTS emi_details');

		$loanDetails = DB::table('loan_details')->get();

		// Find min and max dates
		$minDate = $loanDetails->min('first_payment_date');
		$maxDate = $loanDetails->max('last_payment_date');

		// Generate dynamic columns for months
		$columns = [];
		$start = new \DateTime($minDate);
		$end = new \DateTime($maxDate);

		while ($start <= $end) {
			$columns[] = $start->format('Y_M');
			$start->modify('+1 month');
		}

		// Create table
		$columnsSql = implode(', ', array_map(fn($col) => "`$col` DECIMAL(10,2) DEFAULT 0", $columns));
		DB::statement("CREATE TABLE emi_details (clientid INT, $columnsSql)");

		// Insert EMI data
		foreach ($loanDetails as $loan) {
			$emi = $loan->loan_amount / $loan->num_of_payment;
			$paymentMonths = [];

			$current = new \DateTime($loan->first_payment_date);
			for ($i = 0; $i < $loan->num_of_payment; $i++) {
				$month = $current->format('Y_M');
				$paymentMonths[$month] = $emi;
				$current->modify('+1 month');
			}

			$paymentMonthsSql = implode(', ', array_map(fn($key, $value) => "`$key` = $value", array_keys($paymentMonths), $paymentMonths));
			DB::statement("INSERT INTO emi_details SET clientid = $loan->clientid, $paymentMonthsSql");
		}

		return redirect('/process-emi');
	}


}
