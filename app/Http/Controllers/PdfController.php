<?php

namespace App\Http\Controllers;

use App\Models\Ds;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function view_pdf($id){

        $ds = Ds::where('id', $id)->firstOrFail();

        $mpdf = PDF::Loadview("ds.cetakpdf",['ds' => $ds])->setPaper('a4', 'potrait');

        return $mpdf->stream('ds.cetakpdf');




    }
}
