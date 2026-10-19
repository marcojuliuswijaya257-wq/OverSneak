<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $semuaKategori = Kategori::all();
        return view('kategori.index', compact('semuaKategori'));
    }
    public function tambah()
    {
        return view('kategori.tambah');
    }
    public function simpan(Request $r, $id = null)
    {
        $r->validate([
            'nama_kategori' => 'required|string|max:255',
        ],[
            'nama_kategori.required' => 'Nama kategori di isi dong abang ku',
            'nama_kategori.string' => 'Isi pake teks abang ku',
            'nama_kategori.max' => 'Santai bang banyak benar dah' 

        ]);

        if ($id){
            $kategori = Kategori::findOrFail($id);
            $kategori->update($r->all());
        } else{
            $kategori = Kategori::create($r->all());
        }
        return redirect('/kategori');
        
    }
    public function hapus($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect('/kategori');
    }
        public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }
}
