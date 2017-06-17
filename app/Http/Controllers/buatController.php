<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class buatController extends Controller
{
    public function index()
    {
    	return view ('surat.BuatSurat');
    }
}
