<?php

namespace App\Http\Controllers;

use App\Models\Ds;
use App\Models\Skd;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class DsController extends Controller
{
    public function index()
    {
        $ds = Ds::all();

        return view('ds.tampil', ['ds' => $ds]);
    }

    public function store(Request $request, $id)
    {

        $skd = Skd::where('id', $id)->first();
        $dpasien = Pasien::where('id', $skd->pasien_id)->select('nik', 'tgllahir')->get();

        $hash = hash('sha512', $dpasien);
        $qrname = ($skd->no_surat) . '_' . time() . '.svg';
        $qrimage = QrCode::size(200)->generate($hash, '../public/qrcodes/' . $qrname);

        $ds = Ds::insert([
            'hash' => $hash,
            'qrcode' => $qrname,
            'skd_id' => $id,
        ]);

        return redirect('/ds');

    }
}
