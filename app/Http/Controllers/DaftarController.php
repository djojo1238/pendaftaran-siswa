<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\Eskul;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function daftar(){
        $jurusan=Jurusan::all();
        $eskul=Eskul::all();
        return view('daftar.pendaftaran',compact('jurusan','eskul'));
    }

    public function store(Request $request){
        $request->validate([
            'nama_pendaftaran'=>'required',
            'nama_eskul'=>'required',
            'nama_jurusan'=>'required',
        ]);
        $data=Daftar::create([
            'nama_pendaftaran'=>$request->input('nama_pendaftaran'),
            'id_eskul'=>$request->input('nama_eskul'),
            'id_jurusan'=>$request->input('nama_jurusan'),
        ]);
        $data->save();
        return redirect()->back()->with('sukses','data sudah dikirim');
    }

    public function siswa(){
        return view('admin.pages.data_daftar');
    }


}
