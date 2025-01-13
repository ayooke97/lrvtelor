<?php

namespace App\Http\Controllers;

use App\Models\Ayam;
use App\Models\Telur;
use Illuminate\Http\Request;

class TelurController extends Controller
{
    public function telur()
    {
        $telur = Telur::with('ayam')->get();
        return view('telur.produksi', compact('telur'));
    }
    public function createtelur()
    {
        $ayam = Ayam::all();
        return view('telur.createtelur', compact('ayam'));
    }
    public function storetelur(Request $request)
    {
        $request->validate([
            'ayam_id' => 'required',
            'tglproduksi' => 'required|date',
            'jumlah' => 'required|integer',
            'kualitas' => 'required|string',
            'berat' => 'required|numeric',
            'ukuran' => 'required|string',
        ]);

        Telur::create($request->all());
        return redirect()->route('telur.produksi')->with('success', 'Data telur berhasil ditambahkan');
    }

    public function edittelur($id)
    {
        $telur = Telur::findOrFail($id);
        $ayam = Ayam::all();
        return view('telur.edittelur', compact('telur', 'ayam'));
    }

    public function updatetelur(Request $request, $id)
    {
        $request->validate([
            'ayam_id' => 'required',
            'tglproduksi' => 'required|date',
            'jumlah' => 'required|integer',
            'kualitas' => 'required|string',
            'berat' => 'required|numeric',
            'ukuran' => 'required|string',
        ]);

        $telur = Telur::findOrFail($id);
        $telur->update($request->all());
        return redirect()->route('telur.produksi')->with('success', 'Data telur berhasil diperbarui');
    }

    public function destroytelur($id)
    {
        $telur = Telur::findOrFail($id);
        $telur->delete();
        return redirect()->route('telur.produksi')->with('success', 'Data telur berhasil dihapus');
    }
}
