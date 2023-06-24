<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        $this->middleware('auth');
        // Lakukan operasi atau ambil data yang diperlukan untuk dashboard
        return view('backend.index');
    }
}
