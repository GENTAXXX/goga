<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LowonganController extends Controller
{
    function index(){
    	return view('lowongan');
    }
}
