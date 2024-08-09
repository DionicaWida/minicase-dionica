<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all(); // Mengambil semua data pegawai
        // dd($pegawai); // Dump dan die untuk memeriksa data
        return view('pegawai', compact('pegawai'));
    }

    public function tambahpegawai() {
        return view ('tambahpegawai');
    }

    public function insertpegawai(Request $request)
{
    Pegawai::create([
        'Nama' => $request->Nama,
        'Jenis_Kelamin' => $request->Jenis_Kelamin,
        'Umur' => $request->Umur,
        'No_Telp' => $request->No_Telp,
        'Alamat' => $request->Alamat,
        'Jabatan' => $request->Jabatan,
    ]);

    return redirect()->route('pegawai')->with('create', 'Data Berhasil Ditambahkan.');
}
}
