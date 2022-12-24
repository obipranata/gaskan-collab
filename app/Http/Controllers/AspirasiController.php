<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function index()
    {
        return view('admin.aspirasi');
    }

    public function detail()
    {
        return view('admin.detail-aspirasi');
    }
}
