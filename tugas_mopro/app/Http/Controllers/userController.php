<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataUser;

class userController extends Controller
{
    protected $r;
    function __construct(Request $r){
        $this->request=$r;
    }

    public function tambah(){
        $tambah = new dataUser;
        $tambah->namaUser=$this->request->nama;
        $tambah->ktpUser=$this->request->ktp;
        $tambah->save();

        return redirect()->back();
    }

    public function ubah(){
        dataUser::where('id',$this->request->id)
        ->update([
            'namaUser' => $this->request->nama,
            'ktpUser' => $this->request->ktp,
        ]);

        return redirect()->back();
    }

    public function hapus(){
        dataUser::where('id',$this->request->id)
        ->delete([
            'namaUser' => $this->request->nama,
            'ktpUser' => $this->request->ktp,
        ]);

        return redirect()->back();
    }

    public function tampilan(){
        $data = dataUser::all();
        return view('awal',[
            'data' => $data,
            'id'=> $this->request->id ?? '',
        ]);
    }

    public function editView(){
        $data = dataUser::where('id',$this->request->id)->first();
        return view('edit',[
            'data' => $data,
            'id'=> $this->request->id ?? '',
        ]);
    }
}
