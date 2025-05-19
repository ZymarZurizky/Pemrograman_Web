<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;


class PasienController extends Controller
{
    // Tampil semua data pasien
    public function index()
    {
        $pasiens = Pasien::all();
        return response()->json($pasiens);
    }

    // Tampil form tambah pasien (kalau web, kalau API gak wajib)
    public function create()
    {
        // Buat API biasanya gak pake ini, tapi kalo web bisa return view form
        return response()->json(['message' => 'Form tambah pasien']);
    }

    // Simpan data pasien baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|size:16|unique:pasiens,nik',
            'alamat' => 'required|string',
            'telepon' => 'required|string|max:15',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        ]);

        Pasien::create($request->all());

        return redirect()->route('pasiens.index')->with('success', 'Data pasien berhasil disimpan');
    }


    // Tampil data pasien tertentu
    public function show($id)
    {
        $pasien = Pasien::findOrFail($id);
        return response()->json($pasien);
    }

    // Tampil form edit pasien (kalau web, kalau API gak wajib)
    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);
        return response()->json([
            'message' => 'Form edit pasien',
            'data' => $pasien
        ]);
    }

    // Update data pasien
    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|size:16|unique:pasiens,nik,' . $pasien->id,
            'alamat' => 'required|string',
            'telepon' => 'required|string|max:15',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        ]);

        $pasien->update($request->all());

        return redirect()->route('pasiens.index')->with('success', 'Data pasien berhasil diperbarui');
    }

    // Hapus data pasien
    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        return response()->json([
            'message' => 'Data pasien berhasil dihapus'
        ]);
    }
}
