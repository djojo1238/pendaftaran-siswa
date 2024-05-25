<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Daftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        $jurusan=Jurusan::all();
        $jumlahjurusan = Daftar::select('id_jurusan', \DB::raw('count(*) as total'))
                                        ->groupBy('id_jurusan')
                                        ->pluck('total', 'id_jurusan');
        $daftar=Daftar::all();
        return view('admin.pages.dashboard',compact('jurusan','daftar','jumlahjurusan'));
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
