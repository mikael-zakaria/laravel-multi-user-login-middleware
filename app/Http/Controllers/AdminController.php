<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    function index() {
        // echo "Selamat Datang Admin";

        return view('admin');

    }

    function marketing() {
        echo "Selamat Datang Marketing";
        echo "<h1>". Auth::user()->name ."</h1>";

        echo "<a href='/logout'> Logout >> </a>";
    }

    function keuangan() {
        echo "Selamat Datang Keuangan";
        echo "<h1>". Auth::user()->name ."</h1>";

        echo "<a href='/logout'> Logout >> </a>";
    }

    function operator() {
        echo "Selamat Datang Operator";
        echo "<h1>". Auth::user()->name ."</h1>";

        echo "<a href='/logout'> Logout >> </a>";
    }
}
