<?php

namespace App\Http\Controllers;

use App\Models\Pakan;
use App\Models\Kandang;
use Illuminate\Http\Request;

class PakanController extends Controller
{
    // Menampilkan data pakan
    public function pakan()
    {
        $pakan = Pakan::with('kandang')->get();
        return view('pakan.pakan', compact('pakan'));
    }

    // Menampilkan form tambah pakan
    public function create()
    {
        $kandang = Kandang::all();
        return view('pakan.tambahpakan', compact('kandang'));
    }

    // Menyimpan data pakan baru
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'kandang_id' => 'required|exists:kandang,id',
            'nama_pakan' => 'required|string|max:200',
            'komposisi' => 'required|string',
            'tglmasuk' => 'required|date',
            'tglkeluar' => 'required|date|after_or_equal:tglmasuk', // Cek agar tglkeluar >= tglmasuk
            'total' => 'required|integer|min:1',
            'kebutuhan' => 'required|integer|min:1',
        ]);

        // Simpan data ke dalam tabel pakan
        Pakan::create($request->all());

        return redirect()->route('pakan.pakan')->with('success', 'Data pakan berhasil disimpan.');
    }

    // Menampilkan form edit pakan
    public function edit($id)
    {
        $pakan = Pakan::with('kandang')->findOrFail($id); // Ambil pakan beserta kandangnya
        $kandang = Kandang::all();
        return view('pakan.editpakan', compact('pakan', 'kandang'));
    }

    // Mengupdate data pakan
    public function update(Request $request, $id)
    {
        $request->validate([
            'kandang_id' => 'required|exists:kandang,id',
            'nama_pakan' => 'required|string|max:200',
            'komposisi' => 'required|string',
            'tglmasuk' => 'required|date',
            'tglkeluar' => 'required|date|after_or_equal:tglmasuk',
            'total' => 'required|integer|min:1',
            'kebutuhan' => 'required|integer|min:1',
        ]);

        $pakan = Pakan::findOrFail($id);
        $pakan->update($request->all());

        return redirect()->route('pakan.pakan')->with('success', 'Data pakan berhasil diupdate');
    }

    // Menghapus data pakan
    public function destroy($id)
    {
        $pakan = Pakan::findOrFail($id);
        $pakan->delete();
        return redirect()->route('pakan.pakan')->with('success', 'Data pakan berhasil dihapus');
    }
}
