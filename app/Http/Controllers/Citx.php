<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class Citx extends Controller
{
    function getCities()
    {
        return City::all();
    }

    function change(Request $req)
    {

        $city = City::find($req->Id);
        $city->Name = $req->Name;
        $status = $city->save();
        if ($status) {
            return ["Result" => "Data has been updated"];
        } else {
            return ["Result" => "Operation failed"];
        }
    }
}
