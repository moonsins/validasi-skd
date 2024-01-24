<?php

namespace App\Http\Controllers;

use App\Models\Skd;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkdController extends Controller
{
    public function create($id)
    {

        $pasien = Pasien::where('id', $id)->first();

        return view('skd.tambah',  ['pasien' => $pasien]);

    }

    public function store(Request $request, $id)
    {

        $request->validate([
            'no_surat' => 'required',
            'nama_dokter' => 'required',
            'diagnosa' => 'required',
            'tgl_in' => 'required',
            'tgl_out' => 'required',
        ]);

        $skd= DB::table('skd')->insert([
            'no_surat' => $request['no_surat'],
            'nama_dokter' => $request['nama_dokter'],
            'diagnosa' => $request['diagnosa'],
            'tgl_in' => $request['tgl_in'],
            'tgl_out' => $request['tgl_out'],
            'pasien_id'=> $id,
        ]);

        return redirect('/skd');

    }

    public function index()
    {
        $skd = Skd::get();


        return view('skd.tampil', ['skd' => $skd]);
    }

    public function edit($id)
    {
        $skd = DB::table('skd')->where('id', $id)->first();

        return view('skd.edit', ['skd' => $skd]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_surat' => 'required',
            'nama_dokter' => 'required',
            'diagnosa' => 'required',
            'tgl_in' => 'required',
            'tgl_out' => 'required',
        ]);

        DB::table('skd')
            ->where('id', $id)
            ->update([
                'no_surat' => $request->input('no_surat'),
                'nama_dokter' => $request->input('nama_dokter'),
                'diagnosa' => $request->input('diagnosa'),
                'tgl_in' => $request->input('tgl_in'),
                'tgl_out' => $request->input('tgl_out'),
            ]);
        return redirect('/skd');
    }

    public function destroy($id){
        DB::table('skd')->where('id', $id)->delete();
        return redirect('/skd');
    }
}
