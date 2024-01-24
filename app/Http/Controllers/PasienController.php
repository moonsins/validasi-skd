<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PasienController extends Controller
{
    public function create()
    {

        return view('pasien.tambah');

    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), []);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $pasien['nik'] = $request->nik;
        $pasien['nama'] = $request->nama;
        $pasien['pekerjaan'] = $request->pekerjaan;
        $pasien['alamat'] = $request->alamat;
        $pasien['no_hp'] = $request->no_hp;
        $pasien['tmptlahir'] = $request->tmptlahir;
        $pasien['tgllahir'] = $request->tgllahir;

        Pasien::create($pasien);

        return redirect('/pasien');

    }

    public function index()
    {
        $pasien = Pasien::get();

        return view('pasien.tampil', ['pasien' => $pasien]);
    }

    public function edit($id)
    {
        $pasien = Pasien::where('id', $id)->first();

        return view('pasien.edit', ['pasien' => $pasien]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'tmptlahir' => 'required',
            'tgllahir' => 'required',
        ]);

        Pasien::where('id', $id)->update([
                'nik' => $request->input('nik'),
                'nama' => $request->input('nama'),
                'pekerjaan' => $request->input('pekerjaan'),
                'alamat' => $request->input('alamat'),
                'no_hp' => $request->input('no_hp'),
                'tmptlahir' => $request->input('tmptlahir'),
                'tgllahir' => $request->input('tgllahir'),
            ]);
        return redirect('/pasien');
    }

    public function destroy($id){
        Pasien::where('id', $id)->delete();
        return redirect('/pasien');
    }
}
