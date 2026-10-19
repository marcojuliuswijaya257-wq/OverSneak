<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jajan;
use App\Models\Kategori;

class JajanController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->cari;
        $semuaJajan = Jajan::where('nama_jajan', 'LIKE', '%' . $keyword . '%')->get();

        return view('jajan.index', compact('semuaJajan'));
    }

    public function tambah()
    {
        $semuaKategori = Kategori::all();
        return view('jajan.tambah', compact('semuaKategori'));
    }

    public function simpan(Request $request, $id = null){
        $request->validate([
            'kategori_id' => 'required',
            'nama_jajan' => 'required',
            'harga' => 'required|integer'
        ],[
            'kategori_id.required' => 'Di isi dong bang',
            'nama_jajan.required' => 'Nama di isi dong',
            'harga.required' => 'Harga ne berapaan bang',
            'harga.integer' => 'Harga bang pake angka jangan huruf buta huruf saya',
        ]);

        if($id){
            $jajan = Jajan::findOrFail($id);
        }else{
            $jajan = new Jajan();
        }

        $jajan->kategori_id = $request->kategori_id;
        $jajan->nama_jajan = $request->nama_jajan;
        $jajan->harga = $request->harga;
        $jajan->save();

        return redirect('/jajan');
    }

    public function edit($id)
    {
        $jajan = Jajan::findOrFail($id);
        $semuaKategori = Kategori::all();
        return view('jajan.edit', compact('jajan', 'semuaKategori'));
    }

    public function rekap()
    {
        $semuaJajan = Jajan::all();
        $totalBiayaJajanSaya = $semuaJajan->sum('harga');
        $banyaknyaJajanSaya = $semuaJajan->count();
        $semuaKategori = Kategori::all();

        return view('rekap', compact(
            'semuaJajan',
            'totalBiayaJajanSaya', 
            'semuaKategori',
            'banyaknyaJajanSaya'
        ));
    }
}