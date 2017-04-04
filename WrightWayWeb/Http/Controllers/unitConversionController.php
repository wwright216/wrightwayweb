<?php

namespace WrightWayWeb\Http\Controllers;

use Illuminate\Http\Request;
use View;

class unitConversionController extends Controller
{
	public function index() {
		return view('unitConversion.index');
	}
	public function result() {
		$frmname = request('frmname');
		$unit = request('unit');
		$amount = request('amount');
		if ($frmname == 1){
		$convertedAmount = $amount * ($unit == 'dollar'? .81 : ($unit == 'pound'? .453592 : ($unit == 'mile'? 1.60934 : ($unit == 'quart'? .946353 : ($unit == 'yard'? .9144 : 1)))));
		$convertedUnit = ($unit == 'dollar'? 'British Pound(s)' : ($unit == 'pound'? 'Kilogram(s)' : ($unit == 'mile'? 'Kilometer(s)' : ($unit =='quart'? 'Liter(s)' : ($unit == 'yard'? 'Meter(s)' : 'Meter(s)')))));
		$data = (String) view (('unitConversion.result'), compact('unit', 'amount', 'convertedUnit', 'convertedAmount'))->render();
		return response()->json($data, 200);
		}
		if ($frmname == 2){
		$convertedUnit = ($unit == 'british pound'? 'Dollar(s)' : ($unit == 'kilogram'? 'Pound(s)' : ($unit == 'kilometer'? 'Mile(s)' : ($unit =='liter'? 'Quart(s)' : ($unit == 'meter'? 'Yards(s)' : 'Yard(s)')))));
		$convertedAmount = $amount / ($unit == 'british pound'? .81 : ($unit == 'kilogram'? .453592 : ($unit == 'kilometer'? 1.60934 : ($unit == 'liter'? .946353 : ($unit == 'meter'? .9144 : 1)))));
		$data = (String) view (('unitConversion.result'), compact('unit', 'amount', 'convertedUnit', 'convertedAmount'))->render();
		return response()->json($data, 200);
		}

	}
}