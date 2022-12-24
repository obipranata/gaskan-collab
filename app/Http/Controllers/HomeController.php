<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;

class HomeController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function index_aspirasi()
    {
        $aspirasi = Aspirasi::orderBy('id', 'DESC')->get();
        return view('aspirasi.index', compact('aspirasi'));
    }

    public function store(Request $request)
    {
        $img = $request->file('foto');
        $filename = time(). "-". $img->getClientOriginalName();
        $img->move('foto/', $filename);

        Aspirasi::create(
            [
                "nama" => $request->nama,
                "email" => $request->email,
                "foto" => $filename,
                "cerita" => $request->cerita,
                "isRead" => 0
            ]
        );
        return redirect('/')->with('success', 'data berhasil dikirim');
    }

    public function create()
    {
        $aspirasi = Aspirasi::all();
        return view('aspirasi.create', compact('aspirasi'));
    }
}
