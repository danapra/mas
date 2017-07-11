<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
use App;	

class buatController extends Controller
{
    public function index()
    {
    	return view ('surat.BuatSurat');
    }

    public function cetak(Request $request)
    {
    	$data = $request->all();
  //   	$html = 'asd';
    	$pdf = App::make('dompdf.wrapper');
		$pdf->loadView('print.index', ['data' => $data]);
		return $pdf->download('saveme.pdf');
		// $pdf = PDF::loadView('surat.BuatSurat'); return $pdf->download('namepdf');
    	// return view ('surat.BuatSurat');
    }
}
