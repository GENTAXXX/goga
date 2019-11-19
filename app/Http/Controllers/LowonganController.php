<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LowonganController extends Controller
{
    public function index(){
    	$lowongan = DB::table('lowongan')->get();
        return view('lowongan',['lowongan' => $lowongan]);
    }

    public function tambah(){
    	return view('tambah');
    }
}
