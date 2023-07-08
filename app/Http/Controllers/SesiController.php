<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{

    function index() {
        return view('login');
    }

    function login(Request $request) {

        $request->validate(
            [
            'email'     => 'required|email',
            'password'  => 'required'
            ],
            [
                'email.required'    => 'Email Wajib Diisi',
                'password.required' => 'Password Wajib Diisi'
            ]
        );



        $infologin = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];

        // Middleware Secara Otomatis Akan Aktif
        if( Auth::attempt($infologin) ) {

            if ( Auth::user()->role == 'operator' ) {
                return redirect('/admin/operator');

            } else if ( Auth::user()->role == 'marketing' ) {
                return redirect('/admin/marketing');

            } else if ( Auth::user()->role == 'keuangan' ) {
                return redirect('/admin/keuangan');
            }

        } else {
            return redirect('/')->withErrors('Username dan Password yang dimasukkan tidak sesuai');
        }
    }

    function logout() {

        Auth::logout();

        return redirect('/');
    }

}
