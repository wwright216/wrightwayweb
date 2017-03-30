<?php

namespace WrightWayWeb\Http\Controllers;

use Illuminate\Http\Request;

class unitConversionController extends Controller
{
	public function index() {
		return view('unitConversion.index');
	}
	public function result() {
		$unit = request('unit');
		$amount = request('unitAmount');
		$frmname = request('frmname');
		if ($frmname == 'standard'){
		$convertedAmount = $amount * ($unit == 'dollar'? .81 : ($unit == 'pound'? .453592 : ($unit == 'mile'? 1.60934 : ($unit == 'quart'? .946353 : ($unit == 'yard'? .9144 : 1)))));
		$convertedUnit = ($unit == 'dollar'? 'British Pound(s)' : ($unit == 'pound'? 'Kilogram(s)' : ($unit == 'mile'? 'Kilometer(s)' : ($unit =='quart'? 'Liter(s)' : ($unit == 'yard'? 'Meter(s)' : 'Meter(s)')))));
		}
		if ($frmname == 'metric'){
		$convertedAmount = $amount / ($unit == 'british pound'? .81 : ($unit == 'kilogram'? .453592 : ($unit == 'kilometer'? 1.60934 : ($unit == 'liter'? .946353 : ($unit == 'meter'? .9144 : 1)))));
		$convertedUnit = ($unit == 'british pound'? 'Dollar(s)' : ($unit == 'kilgram'? 'Pound(s)' : ($unit == 'kilometer'? 'Mile(s)' : ($unit =='liter'? 'Quart(s)' : ($unit == 'meter'? 'Yards(s)' : 'Yard(s)')))));
		}
		return view('unitConversion.result', compact('unit', 'amount', 'convertedAmount', 'convertedUnit'));

	}
}