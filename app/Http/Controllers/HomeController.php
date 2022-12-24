<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function create()
    {
        return view('form-user');
    }

    public function store(Request $request)
    {
    }
}
