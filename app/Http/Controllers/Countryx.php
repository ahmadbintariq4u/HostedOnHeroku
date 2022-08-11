<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
class Countryx extends Controller
{
    function getCountries(){
        return Country::all();
    }
}
