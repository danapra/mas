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
        $data = SuratMasuk::paginate(10);

        if (isset($_GET['cari'])) {
            $data = SuratMasuk::where('nama_surat','LIKE','%'.$request['cari'].'%')->paginate(10);
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

        // $img = Image::make(file_get_contents($file));
        $img = file_get_contents($file->getRealPath());
        // $mime = $file->getMimeType();
        
        $mime = mime_content_type($file->getRealPath());

        $img_blob = 'data:' . $mime . ';base64,' .base64_encode($img);
        // 'data:image/' . $mime . ';base64,' . 

        $save = new SuratMasuk;
        // $save->id = 2;
        $save->image = $img_blob;
        $save->mime = $file->getClientOriginalExtension();
        $save->id_user = Auth::user()->id;
        $save->nama_surat = $request['textfield'];
        $save->tanggal_surat = $request['date'];
        $save->tag = $request['textfield2'];
        $save->keterangan = $request['textarea'];
        $save->save();

        return redirect('/surat/masuk');
    }

    // public function download(Request $request)
    // {
    //     $data = SuratMasuk::whereId(124)->first();
        
    //     echo '<a href="'.$data->image.'" download="filename.'.$data->mime.'">download</a>';
    // }

    public function delete($id)
    {
        $data = SuratMasuk::find($id);
        $data->delete();
        return redirect('/surat/masuk');
    }
}
