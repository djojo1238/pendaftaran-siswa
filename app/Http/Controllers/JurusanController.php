<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function jurusan(){
        $jurusan=Jurusan::all();
        
        return view('admin.pages.jurusan',compact('jurusan'));
    }
    public function store(Request $request){
        $request->validate([
            'nama_jurusan'=>'required',
        ]);
        $jurusan=Jurusan::create([
            'nama_jurusan'=>$request->input('nama_jurusan'),
        ]);
        $jurusan->save();
        return redirect()->back()->with('sukses','Data Sukses Dibuat');
    }
    public function show($id){
        $data=Jurusan::find($id);
        return view('admin.pages.edit_jurusan',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jurusan' => 'required',
        ]);
        $jurusan = Jurusan::find($id);
        $jurusan->nama_jurusan = $request->input('nama_jurusan');
        $jurusan->save();
        return redirect()->route('jurusan')->with('sukses', 'Data Sukses Diperbarui');
    }
    public function delete($id)
    {
        $jurusan = Jurusan::find($id);
        $jurusan->delete();
        return redirect()->route('jurusan')->with('sukses', 'Data Sukses Dihapus');
    }
}
