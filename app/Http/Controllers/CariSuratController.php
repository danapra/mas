<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CariSuratController extends Controller
{
    public function index()
    {
    	return view('surat.CariSurat');
    }
}
