<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        // kirim data ke view
        $title = "Dashboard Laravel 12";
        $username = "Radit";

        return view('home', compact('title', 'username'));
    }
}
