<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DutyController extends Controller
{
    public function index()
    {
        return view('web.duties.index');
    }
}