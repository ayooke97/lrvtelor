<?php

namespace App\Http\Controllers;

use App\Models\Ayam;
use Illuminate\Http\Request;
use App\Models\Kandang;

class KandangController extends Controller
{
    // Menampilkan halaman kandang dengan daftar data kandang
    public function kandang()
    {
        $kandang = Kandang::all(); // Mengambil semua data kandang
        return view('pekerja.kandang', compact('kandang'));
    }

    // Menampilkan halaman datakandang dengan data kandang
    public function datakandang()
    {
        $kandang = Kandang::all(); // Mengambil semua data kandang
        return view('kandang.datakandang', compact('kandang'));
    }


    //AYAM
 // Menampilkan data ayam
 public function index()
 {
     $ayam = Ayam::all();
     return view('ayam.index', compact('ayam'));
 }

 // Menampilkan form untuk menambah data ayam
 public function tambahayam()
 {
     return view('ayam.tambahayam'); // Pastikan Anda memiliki view 'create'
 }

 // Menyimpan data ayam baru
 public function storeayam(Request $request)
 {
     $request->validate([
         'nama_ayam' => 'required|string|max:200',
         'umur' => 'nullable|integer',
         'kriteria' => 'required|string|max:500',
         'jumlah' => 'required|integer',
     ]);

     // Menyimpan data ayam
    Ayam::create([
        'nama_ayam' => $request->nama_ayam,
        'umur' => $request->umur,
        'kriteria' => $request->kriteria,
        'jumlah' => $request->jumlah,
    ]);

     return redirect()->route('ayam.index')->with('success', 'Data Ayam berhasil ditambahkan.');
 }

 // Menampilkan form untuk mengedit data ayam
 public function editayam($id)
 {
     $ayam = Ayam::findOrFail($id);
     return view('ayam.editayam', compact('ayam')); // Pastikan Anda memiliki view 'edit'
 }

 // Memperbarui data ayam
 public function updateayam(Request $request, $id)
 {
     $request->validate([
         'nama_ayam' => 'required|string|max:200',
         'umur' => 'nullable|integer',
         'kriteria' => 'required|string|max:500',
         'jumlah' => 'required|integer',
     ]);

     $ayam = Ayam::findOrFail($id);
     $ayam->update($request->all());

     return redirect()->route('ayam.index')->with('success', 'Data Ayam berhasil diperbarui.');
 }

 // Menghapus data ayam
 public function delete($id)
 {
     $ayam = Ayam::findOrFail($id);
     $ayam->delete();

     return redirect()->route('ayam.index')->with('success', 'Data Ayam berhasil dihapus.');
 }

 // Menampilkan form untuk menambahkan data kandang
 public function create()
 {
     // Ambil data jenis ayam dari model
     $jenisAyam = Ayam::pluck('nama_ayam', 'id'); // Ganti 'Jenis' dengan 'nama_ayam'
     return view('kandang.create', compact('jenisAyam'));
 }

 // Menyimpan data kandang baru
 public function store(Request $request)
 {
     $request->validate([
         'Nama' => 'required|string|max:200',
         'Kapasitas' => 'required|integer',
         'Kondisi' => 'required|string|max:500',
         'Jumlah' => 'required|integer',
         'nama_ayam' => 'required|exists:ayam,id', // Memastikan ayam_id yang dipilih ada
         'Kesehatan' => 'required|string|max:200',
     ]);
 
     // Simpan data kandang dengan mengaitkan ayam_id yang sudah ada
     Kandang::create([
         'Nama' => $request->Nama,
         'Kapasitas' => $request->Kapasitas,
         'Kondisi' => $request->Kondisi,
         'Jumlah' => $request->Jumlah,
         'Kesehatan' => $request->Kesehatan,
         'ayam_id' => $request->nama_ayam, // Menggunakan ayam_id yang dipilih
     ]);
 
     return redirect()->route('kandang.datakandang')->with('success', 'Data kandang berhasil ditambahkan');
 }
 

 // Menampilkan form untuk mengedit data kandang
 public function edit($id)
{
    $kandang = Kandang::findOrFail($id);
    $jenisAyam = Ayam::pluck('nama_ayam', 'id'); // Mengambil data jenis ayam
    return view('kandang.edit', compact('kandang', 'jenisAyam'));
}


public function update(Request $request, $id)
{
    $request->validate([
        'Nama' => 'required|string|max:200',
        'Kapasitas' => 'required|integer',
        'Kondisi' => 'required|string|max:500',
        'Jumlah' => 'required|integer',
        'Kesehatan' => 'required|string|max:200',
        'nama_ayam' => 'required|exists:ayam,id', // Memastikan ayam_id valid
    ]);

    $kandang = Kandang::findOrFail($id);
    $kandang->update([
        'Nama' => $request->Nama,
        'Kapasitas' => $request->Kapasitas,
        'Kondisi' => $request->Kondisi,
        'Jumlah' => $request->Jumlah,
        'Kesehatan' => $request->Kesehatan,
        'ayam_id' => $request->nama_ayam, // Fixed: use nama_ayam as ayam_id
    ]);

    return redirect()->route('kandang.datakandang')->with('success', 'Data kandang berhasil diperbarui');
}


 // Menghapus data kandang
 public function destroy($id)
 {
     $kandang = Kandang::findOrFail($id);
     $kandang->delete();

     return redirect()->route('kandang.datakandang')->with('success', 'Data kandang berhasil dihapus');
 } }
