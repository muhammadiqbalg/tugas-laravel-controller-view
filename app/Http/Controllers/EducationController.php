<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    //
    public function index() {
        $university = 'Gunadarma University';
        $faculty = 'Faculty of Industrial Technology';
        $major = 'Informatics';
        $batch = 2020;

        $data['university'] = $university;
        $data['faculty'] = $faculty;
        $data['major'] = $major;
        $data['batch'] = $batch;

        return view('education/index', $data);
    }
}
