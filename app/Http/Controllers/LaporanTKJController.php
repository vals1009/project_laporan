<?php

namespace App\Http\Controllers;

use App\Models\LaporanTKJ;
use App\Models\Siswa;
use Illuminate\Http\Request;

class LaporanTKJController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporan = LaporanTKJ::all();
        return view('laporanTKJ.index', compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswa = Siswa::with('jurusan')->get();
        return view('laporanTKJ.create', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Proses menyimpan file PDF
        if ($request->hasFile('document_pdf')) {
            $filePdf = $request->file('document_pdf');
            $pathPdf = $filePdf->store('laporanTKJ', 'public'); // Simpan file PDF di dalam direktori 'storage/app/public/laporanTKJ'
        }

        // Proses menyimpan file Word
        if ($request->hasFile('document_word')) {
            $fileWord = $request->file('document_word');
            $pathWord = $fileWord->store('wordTKJ', 'public'); // Simpan file Word di dalam direktori 'storage/app/public/laporanTKJ'
        }

        // Buat entri baru untuk laporan dengan informasi yang disediakan
        LaporanTKJ::create([
            'siswa_id' => $request->siswa_id,
            'title' => $request->title,
            'description' => $request->description ?? '',
            'document_pdf' => $pathPdf ?? '', // Simpan path file PDF
            'document_word' => $pathWord ?? '', // Simpan path file Word
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('laporanTKJ.index')->with('success', 'Laporan berhasil ditambahkan.');
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
        $laporan = LaporanTKJ::findOrFail($id);
        return view('laporanTKJ.edit', compact('laporan', 'siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $laporan = LaporanTKJ::findOrFail($id);
        $laporan->update($request->all());

        return redirect()->route('laporanTKJ.index')
            ->with('success', 'Laporan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $laporan = LaporanTKJ::findOrFail($id);
        $laporan->delete();

        return redirect()->route('laporanTKJ.index')
            ->with('success', 'Laporan berhasil dihapus.');
    }
}
