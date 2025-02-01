<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Jadwal;
use App\Models\Obat;
use App\Models\RekamMedis;

class RumahSakitController extends Controller
{
    public function index()
    {
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        $jadwal = Jadwal::with('dokter')->get();
        $obat = Obat::all();
        $rekamMedis = RekamMedis::with(['pasien', 'dokter', 'obat'])->get();

        return view('rumahsakit', compact('pasien', 'dokter', 'jadwal', 'obat', 'rekamMedis'));
    }
}
