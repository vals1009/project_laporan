<?php

namespace App\Http\Controllers;

use App\Models\LaporanOTKP;
use App\Models\Siswa;
use Illuminate\Http\Request;

class LaporanOTKPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporan = LaporanOTKP::all();
        return view('laporanOTKP.index', compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswa = Siswa::with('jurusan')->get();
        return view('laporanOTKP.create', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Proses menyimpan file PDF
        if ($request->hasFile('document_pdf')) {
            $filePdf = $request->file('document_pdf');
            $pathPdf = $filePdf->store('laporanOTKP', 'public'); // Simpan file PDF di dalam direktori 'storage/app/public/laporanOTKP'
        }

        // Proses menyimpan file Word
        if ($request->hasFile('document_word')) {
            $fileWord = $request->file('document_word');
            $pathWord = $fileWord->store('wordOTKP', 'public'); // Simpan file Word di dalam direktori 'storage/app/public/laporanOTKP'
        }

        // Buat entri baru untuk laporan dengan informasi yang disediakan
        LaporanOTKP::create([
            'siswa_id' => $request->siswa_id,
            'title' => $request->title,
            'description' => $request->description ?? '',
            'document_pdf' => $pathPdf ?? '', // Simpan path file PDF
            'document_word' => $pathWord ?? '', // Simpan path file Word
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('laporanOTKP.index')->with('success', 'Laporan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = Siswa::all();
        $laporan = LaporanOTKP::findOrFail($id);
        return view('laporanOTKP.edit', compact('laporan', 'siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $laporan = LaporanOTKP::findOrFail($id);
        $laporan->update($request->all());

        return redirect()->route('laporanOTKP.index')->with('success', 'Laporan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $laporan = LaporanOTKP::findOrFail($id);
        $laporan->delete();

        return redirect()->route('laporanOTKP.index')->with('success', 'Laporan berhasil dihapus.');
    }
}
