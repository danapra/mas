<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Image;
use App\SuratMasuk;
use Auth;

class SuratMasukController extends Controller
{
    public function index(Request $request)
    {
        $data = SuratMasuk::all();

        if (isset($_GET['cari'])) {
            $data = SuratMasuk::where('nama_surat','LIKE','%'.$request['cari'].'%')->get();
        }

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
        // $save->id = 2;
        $save->image = $img_blob;
        $save->id_user = Auth::user()->id;
        $save->nama_surat = $request['textfield'];
        $save->tanggal_surat = $request['date'];
        $save->tag = $request['textfield2'];
        $save->keterangan = $request['textarea'];
        $save->save();

        return redirect('/surat/masuk');
    }
}
