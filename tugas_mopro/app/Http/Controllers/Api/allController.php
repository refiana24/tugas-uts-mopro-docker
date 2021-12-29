<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dataUser;

class allController extends Controller
{
    
    protected $r;
    function __construct(Request $r){
        $this->request=$r;
    }

    public function simpan(){
        $tambah = new dataUser;
        $tambah->namaUser=$this->request->nama;
        $tambah->ktpUser=$this->request->ktp;
        $tambah->save();

        return response()->json([
            'message' => 'Berhasil Menambah Data',
        ]);
    }

    public function ubah(){
        dataUser::where('id',$this->request->id)
        ->update([
            'namaUser' => $this->request->nama,
            'ktpUser' => $this->request->ktp,
        ]);
        return response()->json([
            'message' => 'Berhasil Mengubah Data',
        ]);
    }

    public function hapus(){
        dataUser::where('id',$this->request->id)
        ->delete([
            'namaUser' => $this->request->nama,
            'ktpUser' => $this->request->ktp,
        ]);
        return response()->json([
            'message' => 'Berhasil Menghapus Data',
        ]);
    }

    public function data(){
        $data = dataUser::all();
        
        return response()->json([
            'message' => 'Berhasil Mengambil Data',
            'data' => $data,
        ]);
    }
}
