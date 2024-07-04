<?php

namespace App\Http\Controllers;

use App\Models\LaporanBDP;
use App\Models\LaporanOTKP;
use App\Models\LaporanTBSM;
use App\Models\LaporanTKJ;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view('homepage.index');
    }
    
    public function viewsTKJ()
    {
        $laporan = LaporanTKJ::all();
        return view('homepage.laporan_TKJ', compact('laporan'));
    }

    public function viewsOTKP()
    {
        $laporan = LaporanOTKP::all();
        return view('homepage.laporan_OTKP', compact('laporan'));
    }

    public function viewsTBSM()
    {
        $laporan = LaporanTBSM::all();
        return view('homepage.laporan_TSM', compact('laporan'));
    }

    public function viewsBDP()
    {
        $laporan = LaporanBDP::all();
        return view('homepage.laporan_BDP', compact('laporan'));
    }
}