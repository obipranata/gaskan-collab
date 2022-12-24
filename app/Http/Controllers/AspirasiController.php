<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;

class AspirasiController extends Controller
{
    public function index()
    {
        $aspirasi = Aspirasi::query()->get();
        return view('admin.aspirasi', [
            'aspirasi' => $aspirasi
        ]);
    }

    public function detail()
    {
        return view('admin.detail-aspirasi');
    }
}
