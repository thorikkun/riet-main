<?php

namespace App\Http\Controllers;

use App\Models\Holaqoh;
use Illuminate\Http\Request;

class HolaqohController extends Controller
{
    public function index()
    {
        $holaqohs = Holaqoh::all();
        return view('holaqohs.index', compact('holaqohs'));
    }

    public function create()
    {
        return view('holaqohs.create', );
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'id_santri' => 'required',
            'jenis' => 'required|string|max:255',
            'catatan' => 'required|string|max:255',
            'status' => 'required',
        ]);

        Holaqoh::create($request->all());

        return redirect()->route('holaqohs.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit(Holaqoh $holaqoh)
    {
        return view('holaqohs.edit', compact('holaqoh'));
    }

    public function update(Request $request, Holaqoh $holaqoh)
    {
        $request->validate([
            'id_user' => 'required',
            'id_santri' => 'required',
            'jenis' => 'required|string|max:255',
            'catatan' => 'required|string|max:255',
            'status' => 'required',
        ]);

        $holaqoh->update($request->all());

        return redirect()->route('holaqohs.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(Holaqoh $holaqoh)
    {
        $holaqoh->delete();
        return redirect()->route('holaqohs.index')->with('success', 'Data berhasil dihapus.');
    }
}
