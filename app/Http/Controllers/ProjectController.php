<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    
    public function login()
    {
        return view('login');
    }

    public function select_company()
    {
        return view('select_company');
    }

    
}
