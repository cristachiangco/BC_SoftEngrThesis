<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientsController extends Controller
{
    function patientLogIn()
    {
        return view ('bc_login');
    }
}
