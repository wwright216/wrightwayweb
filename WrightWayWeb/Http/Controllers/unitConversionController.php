<?php

namespace WrightWayWeb\Http\Controllers;

use Illuminate\Http\Request;
use View;

class unitConversionController extends Controller
{
    public function index()
    {
        return view('unitConversion.index');
    }

    public function result()
    {
        $return  = '';
        $frmname = request('frmname');
        $unit    = request('unit');
        $amount  = request('amount');
        $amounts = [
            'dollar'        => .81,
            'pound'         => .453592,
            'mile'          => 1.60934,
            'quart'         => .946353,
            'yard'          => .9144,
            'british pound' => .81,
            'kilogram'      => .453592,
            'kilometer'     => 1.60934,
            'liter'         => .946353,
            'meter'         => .9144,
        ];
        $units   = [
            'dollar'        => 'British Pound(s)',
            'pound'         => 'Kilogram(s)',
            'mile'          => 'Kilometer(s)',
            'quart'         => 'Liter(s)',
            'yard'          => 'Meter(s)',
            'british pound' => 'Dollar(s)',
            'kilogram'      => 'Pound(s)',
            'kilometer'     => 'Mile(s)',
            'liter'         => 'Quart(s)',
            'meter'         => 'Yard(s)',
        ];

        if ($frmname == 1) {
            foreach ($amounts as $key => $value) {
                if ($unit == $key) {
                    $convertedAmount = $amount * $value;
                }
            }

            foreach ($units as $key => $value) {
                if ($unit == $key) {
                    $convertedUnit = $value;
                }
            }

            $data  = (String) view (('unitConversion.result'), compact('unit', 'amount', 'convertedUnit', 'convertedAmount'))->render();
            $return = response()->json($data, 200);
        }

        if ($frmname == 2) {
            foreach ($amounts as $key => $value) {
                if ($unit == $key) {
                    $convertedAmount = $amount / $value;
                }
            }

            foreach ($units as $key => $value) {
                if ($unit == $key) {
                    $convertedUnit = $value;
                }
            }
            $data   = (String) view (('unitConversion.result'), compact('unit', 'amount', 'convertedUnit', 'convertedAmount'))->render();
            $return = response()->json($data, 200);
        }

        return $return;
    }
}
