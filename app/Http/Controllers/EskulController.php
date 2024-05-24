<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use Illuminate\Http\Request;

class EskulController extends Controller
{
    public function eskul()
    {
        $eskul = Eskul::all();

        return view('admin.pages.eskul', compact('eskul'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_eskul' => 'required',
        ]);
        $eskul = Eskul::create([
            'nama_eskul' => $request->input('nama_eskul'),
        ]);
        $eskul->save();
        return redirect()->back()->with('sukses', 'Data Sukses Dibuat');
    }
    public function show($id)
    {
        $data = Eskul::find($id);
        return view('admin.pages.edit_eskul', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_eskul' => 'required',
        ]);
        $eskul = Eskul::find($id);
        $eskul->nama_eskul = $request->input('nama_eskul');
        $eskul->save();
        return redirect()->route('eskul')->with('sukses', 'Data Sukses Diperbarui');
    }
    public function delete($id)
    {
        $eskul = Eskul::find($id);
        $eskul->delete();
        return redirect()->route('eskul')->with('sukses', 'Data Sukses Dihapus');
    }
}
