<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $headerTitle = 'Senarai Pengguna';
        return view('web.users.index', compact('headerTitle'));
    }


}
