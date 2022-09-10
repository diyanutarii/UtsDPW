<?php

namespace App\Http\Controllers;

use App\Models\Artikel;

class ArtikelController extends Controller
{
    function index()
    {
        $user = request()->user();
        $data['list_artikel'] = $user->artikel;
        return view('artikel.index', $data);
    }
    function create()
    {
        return view('artikel.create');
    }
    function store()
    {
        $artikel = new Artikel();
        $artikel->nama = request('nama');
        $artikel->jenis = request('jenis');
        $artikel->id_user = request()->user()->id;
        $artikel->deskripsi = request('deskripsi');
        $artikel->save();

        return redirect('admin/artikel')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show($artikel)
    {
        $data['artikel'] = Artikel::find($artikel);
        return view('artikel.show', $data);
    }
    function edit(Artikel $artikel)
    {
        $data['artikel'] =  $artikel;
        return view('artikel.edit', $data);
    }
    function update(Artikel $artikel)
    {
        $artikel->nama = request('nama');
        $artikel->jenis = request('jenis');
        $artikel->deskripsi = request('deskripsi');
        $artikel->save();

        return redirect('admin/artikel')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Artikel $artikel)
    {
        $artikel->delete();

        return redirect('admin/artikel')->with('danger', 'Data Berhasil Dihapus');
    }

    function filter()
    {
        $nama = request('nama');
        $data['nama'] = $nama;

        $data['list_artikel'] = Artikel::where('nama', 'like', "%$nama%")->get();

        return view('artikel.index', $data);
    }
}
