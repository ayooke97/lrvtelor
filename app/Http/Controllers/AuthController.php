<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');
    
        $user = \App\Models\Data::where('email', $request->email)->first();
    
        if ($user) {
            // Cek apakah password cocok
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user, $remember);
                return redirect()->route('pekerja.pekerja');
            } else {
                return back()->withErrors(['password' => 'Password tidak sesuai.'])->withInput();
            }
        }
    
        return back()->withErrors(['email' => 'Email tidak terdaftar.'])->withInput();
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.login');
    }
    public function register(Request $request)
{
    $request->validate([
        'NIP' => 'required|max:20',
        'Nama' => 'required|max:100',
        'Tempat' => 'required|max:100',
        'Tanggal_Lahir' => 'required|date',
        'Jenis_Kelamin' => 'required',
        'Agama' => 'required|max:50',
        'Status' => 'required|max:20',
        'Alamat' => 'required',
        'Posisi' => 'required|max:50',
        'email' => 'required|email|unique:data,email',
        'password' => 'required|confirmed|min:8',
    ]);

    $user = \App\Models\Data::create([
        'NIP' => $request->NIP, // Memastikan NIP disimpan
        'Nama' => $request->Nama,
        'Tempat' => $request->Tempat,
        'Tanggal_Lahir' => $request->Tanggal_Lahir,
        'Jenis_Kelamin' => $request->Jenis_Kelamin,
        'Agama' => $request->Agama,
        'Status' => $request->Status,
        'Alamat' => $request->Alamat,
        'Posisi' => $request->Posisi,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    Auth::login($user);

    return redirect()->route('pekerja.pekerja'); // Ubah sesuai dengan rute setelah login
}

}
