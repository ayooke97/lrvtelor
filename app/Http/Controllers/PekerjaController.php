<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class PekerjaController extends Controller
{
    public function index()
    {
        return view('pekerja.pekerja'); // Menampilkan halaman pekerja
    }
    public function showDataPekerja()
{
    // Ambil semua data pekerja dari tabel 'data'
    $pekerja = \App\Models\Data::all();

    // Kirim data ke view 'datapekerja'
    return view('pekerja.datapekerja', ['pekerja' => $pekerja]);
}
public function edit($id)
{
    $pekerja = Data::findOrFail($id);
    return view('pekerja.editpekerja', compact('pekerja'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'NIP' => 'required|max:20',
        'Nama' => 'required|max:100',
        'Tempat' => 'required|max:100',
        'Tanggal_Lahir' => 'required|date',
        'Jenis_Kelamin' => 'required',
        'Agama' => 'required|max:50',
        'Status' => 'required|max:20',
        'Alamat' => 'required',
        'Posisi' => 'required|max:50',
        'email' => 'required|email',
    ]);

    $pekerja = Data::findOrFail($id);
    $pekerja->update($request->all());

    return redirect()->route('pekerja.datapekerja')->with('success', 'Data pekerja berhasil diperbarui.');
}

public function destroy($id)
{
    $pekerja = Data::findOrFail($id);
    $pekerja->delete();

    return redirect()->route('pekerja.datapekerja')->with('success', 'Data pekerja berhasil dihapus.');
}


}
