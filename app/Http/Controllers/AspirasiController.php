<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;

class AspirasiController extends Controller
{
    public function index()
    {
        $aspirasi = Aspirasi::all();
        return view('admin.aspirasi', compact('aspirasi'));
    }

    public function detail()
    {
        return view('admin.detail-aspirasi');
    }
}
