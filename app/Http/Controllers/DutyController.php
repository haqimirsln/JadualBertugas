<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DutyController extends Controller
{
    public function index()
    {
        $headerTitle = 'Senarai Tugas';
        return view('web.duties.index', compact('headerTitle'));
    }
}
