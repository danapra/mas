<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Image;
use App\SuratKeluar;
use Auth;

class SuratKeluarController extends Controller
{
    public function index(Request $request)
    {
        $data = SuratKeluar::paginate(10);

        if (isset($_GET['cari'])) {
            $data = SuratKeluar::where('nama_surat','LIKE','%'.$request['cari'].'%')->paginate(10);
        }

    	return view('surat.SuratKeluarIndex', ['data' => $data]);
    }

    public function create2()
    {
        return view('surat.SuratKeluar');
    }

    public function store2(Request $request)
    {
        $file = $request->file('fileField');

        // $img = Image::make(file_get_contents($file));
        $img = file_get_contents($file->getRealPath());
        // $mime = $file->getMimeType();
        
        $mime = mime_content_type($file->getRealPath());

        $img_blob = 'data:' . $mime . ';base64,' .base64_encode($img);
        // 'data:image/' . $mime . ';base64,' . 

        $save = new SuratKeluar;
        // $save->id = 2;
        $save->image = $img_blob;
        $save->mime = $file->getClientOriginalExtension();
        $save->id_user = Auth::user()->id;
        $save->nama_surat = $request['textfield'];
        $save->tanggal_surat = $request['date'];
        $save->tag = $request['textfield2'];
        $save->keterangan = $request['textarea'];
        $save->save();

        return redirect('/surat/keluar');
    }

    public function delete2($id)
    {
        $data = SuratKeluar::find($id);
        $data->delete();
        return redirect('/surat/keluar');
    }
}
