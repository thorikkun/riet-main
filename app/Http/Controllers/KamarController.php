<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        $kamar = Kamar::all();
        return view('kamar.index', compact('kamar'));
    }

    public function create()
    {
        return view('kamar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'nama_kamar' => 'required|string',
            'lantai' => 'required|integer',
        ]);

        Kamar::create($request->all());
        return redirect()->route('kamar.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kamar = Kamar::find($id);
        return view('kamar.edit', compact('kamar'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_user' => 'required',
            'nama_kamar' => 'required|string',
            'lantai' => 'required|integer',
        ]);

        $kamar = Kamar::find($id);
        $kamar->update($request->all());
        return redirect()->route('kamar.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        Kamar::find($id)->delete();
        return redirect()->route('kamar.index')->with('success', 'Data berhasil dihapus');
    }
}
