<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class buatController extends Controller
{
    public function index()
    {
    	return view ('surat.BuatSurat');
    }

    public function cetak(Request $request)
    {
    	dd($request->all());
    	return view ('surat.BuatSurat');
    }
}
