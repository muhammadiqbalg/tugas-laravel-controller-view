<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function index() {
        $name = 'Muhammad Iqbal Gobel';
        $location = 'Jakarta';
        $region = 'Indonesia';

        $data['name'] = $name;
        $data['location'] = $location;
        $data['region'] = $region;

        return view('landing/index', $data);
    }
}
