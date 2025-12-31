<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
class AutentifikasiController extends Controller
{
    Public function index()
    {
        return view('auth.login');
    }
    public function authenticate(LoginRequest $request)
    {
        $admin = Admin::where('email', $request->email)->first();
         if (!$admin || !Hash::check($request->password, $admin->password)) {
        return back()->with('error', 'Email atau password salah');
        }
        Auth::login($admin);
        return redirect()->route('dashboard.index');
    }
}
