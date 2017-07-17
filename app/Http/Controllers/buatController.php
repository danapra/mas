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
		// $pdf->loadView('print.index', ['data' => $data]);
        $pdf->loadHTML('<!DOCTYPE html>
            <html>
                <head>
                    <title></title>
                </head>
                <body>
                    <img src="'.asset('image/kop.jpg').'" height="10%" width="100%" >
                    <br><br>
                    '.$data['isi'].'
                    <br><br>
                    '.$data['kota'].'
                    <br>
                    <img src="'.$data['ttd'].'">
                    <br>
                    '.$data['nama'].'
                </body>
            </html>
        ');
		return $pdf->setPaper('a4')->download('saveme.pdf');
		// $pdf = PDF::loadView('surat.BuatSurat'); return $pdf->download('namepdf');
    	// return view ('surat.BuatSurat');
    }
}
