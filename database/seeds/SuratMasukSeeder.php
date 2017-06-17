<?php

use Illuminate\Database\Seeder;
use App\SuratMasuk;

class SuratMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	for ($i=0; $i < 100 ; $i++) { 
    		# code...
    		$data = Faker\Factory::create();

    		$insert = new SuratMasuk;
    		$insert->image = $data->name;
    		$insert->nama_surat = $data->name;
    		$insert->tanggal_surat = '2017/05/29';
    		$insert->tag = $data->name;
    		$insert->keterangan = $data->name;
    		$insert->save();
    	}
    }
}
