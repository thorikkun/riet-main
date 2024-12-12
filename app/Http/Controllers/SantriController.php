<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\User;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index()
    {
        $data = User::where('isAdmin', '==', 0)->get();
        return view('santri.index', compact('data'));
    }

    public function create()
    {
        $users = User::all(); // Untuk dropdown ID User
        return view('santri.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required|exists:users,id',
            'nama_kamar' => 'required|string',
            'kelas' => 'required|string',
        ]);

        Santri::create($request->all());
        return redirect()->route('santri.index')->with('success', 'Data Santri berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $santri = Santri::find($id);
    if ($santri) {
        return redirect()->route('santri.index')->with('error', 'Data santri tidak ditemukan.');
    }
    return view('santri.edit', compact('santri'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_user' => 'required|exists:users,id',
            'nama_kamar' => 'required|string',
            'kelas' => 'required|string',
        ]);

        $santri = Santri::find($id);
        $santri->update($request->all());
        return redirect()->route('santri.index')->with('success', 'Data Santri berhasil diperbarui.');
    }

    public function post(Request $request)
    {
        $input=$request->all();
        $input['password'] = '123456';
        User::create ($input);
        return redirect()->route('santri.index');
    }

    public function destroy($id)
{
    $santri = Santri::find($id);

    if (!$santri) {
        return redirect()->route('santri.index')->with('error', 'Data Santri tidak ditemukan.');
    }

    try {
        $santri->delete();
        return redirect()->route('santri.index')->with('success', 'Data Santri berhasil dihapus.');
    } catch (\Exception $e) {
        return redirect()->route('santri.index')->with('error', 'Gagal menghapus data Santri. Pastikan tidak ada data terkait.');
    }
}


    public function show(string $id)
    {
        $data = Santri::findOrFail($id); // Pastikan model dan data sesuai
        
        return view('santri.detail', compact('data'));
    }
    
}
