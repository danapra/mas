<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Image;
use App\SuratMasuk;

class SuratMasukController extends Controller
{
    public function index()
    {
        $data = SuratMasuk::all();

    	return view('surat.SuratMasukIndex', ['data' => $data]);
    }

    public function create()
    {
        return view('surat.SuratMasuk');
    }

    public function store(Request $request)
    {
        $file = $request->file('fileField');

        $img = Image::make(file_get_contents($file));
        $mime = $file->getMimeType();
        $img->encode('png');

        $img_blob = 'data:image/' . $mime . ';base64,' . base64_encode($img);

        $save = new SuratMasuk;
        $save->id = 2;
        $save->image = $img_blob;
        $save->nama_surat = $request['textfield'];
        $save->tanggal_surat = $request['date'];
        $save->tag = $request['textfield2'];
        $save->keterangan = $request['textarea'];
        $save->save();

        return redirect('/admin/surat/masuk');
    }
}
