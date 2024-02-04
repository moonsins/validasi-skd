<?php

namespace App\Http\Controllers;

use App\Models\Ds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ValidasiController extends Controller
{
    public function dashboard(){

        return view ('validasi.index');
       }

       public function scanner(Request $request){

        // dd($request->get());

        $hash = $request->qr_code;
        // dd($hash);
        $ds = Ds::where('hash', $hash)->firstOrFail();
        // dd($id);
        dd($ds);
        // return redirect()->route('hasil', ['ds', $ds]);
       }

       public function hasil(Ds $ds, $dsid){

        // $data = Ds;
        $data = Ds::where('hash', $dsid);
        $data1 = $data->id;
        dd($data1);
        // return view('validasi.hasil')->with(['data' => $data]);
        // return view ('validasi.hasil');

       }
}
