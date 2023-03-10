<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.list-admin', compact('users'));
    }

    public function login(Request $request)
    {
        if ($request->method() == "GET") {
            return view("login.login");
        }

        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::query()->where("email", $email)->first();

        if ($user == null) {
            return redirect()
            ->back()
            ->withErrors(["msg" => "Email tidak ditemukan"]);
        }

        if (!Hash::check($password, $user->password)) {
            return redirect()->back()->withErrors(["msg" => "Password salah!"]);
        }

        if (!session()->isStarted()) {
            session()->start();
        }
        session()->put("logged", true);
        session()->put("idUser", $user->id);
        return redirect('/');
    }

    public function addAdmin(Request $request)
    {
        if ($request->method() == "GET") {
            return view('admin.add-admin');
        }

        $nama = $request->nama;
        $email = $request->email;
        $password = $request->password;

        $payload = [
            'nama' => $nama,
            'email' => $email,
            'password' => $password
        ];

        User::query()->create($payload);

        return redirect()->back()->with('success', 'data berhasil ditambahkan');
        ;
    }

    public function logout(Request $request)
    {
        session()->flush();
        return redirect()->route("login");
    }

    public function destroy($id){
        $admin = User::query()->where('id', $id)->first();
        $admin->delete();
        return redirect()->back();
    }
}
