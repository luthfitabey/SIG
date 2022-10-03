<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LahanController extends Controller
{
    public function index()
    {
        // Menampilkan data dari tabel space
        return view('dashboard.lahan');
    }


}
