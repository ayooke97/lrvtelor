<?php

namespace App\Http\Controllers;

use App\Models\Kandang;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF; // Pastikan DomPDF sudah diimport

class LaporanController extends Controller
{
    public function laporan(Request $request)
    {
        // Ambil parameter pencarian dan sorting
        $search = $request->input('search'); // Untuk teks umum
        $tglproduksi = $request->input('tglproduksi'); // Untuk filter berdasarkan tanggal
        $sort = $request->input('sort', 'desc'); // Default sort by latest

        // Query laporan dengan join antar tabel
        $laporan = Kandang::join('ayam', 'ayam.id', '=', 'kandang.ayam_id')
            ->join('produksitelur', 'produksitelur.ayam_id', '=', 'ayam.id')
            ->select(
                'produksitelur.tglproduksi',
                'kandang.Nama as nama_kandang',
                'kandang.Jumlah as jumlah_ayam',
                'ayam.nama_ayam',
                'ayam.umur',
                'kandang.Kesehatan as kesehatan',
                'produksitelur.jumlah as jumlah_telur',
                'produksitelur.kualitas as kualitas_telur',
                'produksitelur.berat as berat_telur',
                'produksitelur.ukuran as ukuran_telur'
            )
            ->where(function ($query) use ($search, $tglproduksi) {
                if ($search) {
                    $query->where('kandang.Nama', 'like', '%' . $search . '%')
                        ->orWhere('ayam.nama_ayam', 'like', '%' . $search . '%');
                }
                if ($tglproduksi) {
                    $query->whereDate('produksitelur.tglproduksi', $tglproduksi);
                }
            })
            ->orderBy('produksitelur.tglproduksi', $sort) // Sort by date
            ->get();

        // Kirim data ke view
        return view('laporan.laporan', compact('laporan'));
    }

    // Fungsi untuk menghasilkan PDF
    public function generatePDF(Request $request)
    {
        // Ambil parameter pencarian
        $search = $request->input('search');
        $tglproduksi = $request->input('tglproduksi');

        // Query laporan dengan join antar tabel
        $laporan = Kandang::join('ayam', 'ayam.id', '=', 'kandang.ayam_id')
            ->join('produksitelur', 'produksitelur.ayam_id', '=', 'ayam.id')
            ->select(
                'produksitelur.tglproduksi',
                'kandang.Nama as nama_kandang',
                'kandang.Jumlah as jumlah_ayam',
                'ayam.nama_ayam',
                'ayam.umur',
                'kandang.Kesehatan as kesehatan',
                'produksitelur.jumlah as jumlah_telur',
                'produksitelur.kualitas as kualitas_telur',
                'produksitelur.berat as berat_telur',
                'produksitelur.ukuran as ukuran_telur'
            )
            ->where(function ($query) use ($search, $tglproduksi) {
                if ($search) {
                    $query->where('kandang.Nama', 'like', '%' . $search . '%')
                        ->orWhere('ayam.nama_ayam', 'like', '%' . $search . '%');
                }
                if ($tglproduksi) {
                    $query->whereDate('produksitelur.tglproduksi', $tglproduksi);
                }
            })
            ->get();

        // Generate PDF menggunakan DomPDF
        $pdf = PDF::loadView('laporan.pdf', compact('laporan'));

        // Download file PDF
        return $pdf->download('laporan_produksi_telur.pdf');
    }
}
