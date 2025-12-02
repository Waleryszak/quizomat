<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    //sprawdzanie sesji  i przekierowanie do panelu
    public function loginForm()
    {
       
        if (session()->has('admin_logged')) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required', 
            'password' => 'required',
        ]);

        //Proste sprawdzenie inputów jeśli true nadaje token/flage zalog a jak nie to błąd
        if ($request->login === 'admin' && $request->password === '1234') {
            session(['admin_logged' => true]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['login' => 'Błędny login lub hasło']);
    }

    public function logout()
    {
        session()->forget('admin_logged');
        return redirect()->route('admin.login');
    }
}
// usuwa token zalogowania i odsyła do ekranu logowania