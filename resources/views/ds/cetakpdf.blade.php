<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        <style>
        body{
            font-family: Arial; background-color: #fff;
        }
        .kopsurat{
            width: 750px; margin: 0 auto; background-color: #fff; height: 500px; padding: 20px;
        }
        .garis {border-bottom: 7px solid #000; width: 100%;}
        .tengah {
            text-align: center; line-height: 7px;
        }
    </style>
</head>

<body>
{{-- @dd($ds) --}}
    <div id="kopsurat">
        <table class="garis">
            <tr>
                <td class="tengah"><img width="60px"  src="{{asset('surat/logo.png')}}" alt=""></td>
                <td class="tengah" style="padding-right: 30px">
                    <font size="3"> RUMAH SAKIT UMUM </font><br><br><br>
                    <font size="5"> KMC LURAGUNG</font><br><br>
                    <font size="2"> Jl. Raya Luragung – Desa Desa Cirahayu, Kecamatan Luragung, Kuningan <br><br>
                        Telp. (0232) 870112, Fax (0232) 870112, Email : rsukmcluragung@yahoo.com <br><br>
                    </font>
                </td>
        </tr>
        </table>

        <table width="470">
            <center >
                <font size="4"><b><u>SURAT KETERANGAN DOKTER</u></b> </font><br>
                <font size="2"><b><u>NO.{{$ds ->skd ->no_surat}}</u></b> </font><br>
            </center>
        </table>

        <table>
            <tr>
                <td>
                    Dengan ini menerangkan bahwa berdasarkan hasil pemeriksaan yang telah dilakukan kepada pasien :
                </td>
            </tr>
        </table>

        <table width="350">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{$ds->skd ->pasien ->nama}}</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td>{{$ds->skd ->pasien ->nik}}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{$ds->skd ->pasien ->pekerjaan}}</td>
            </tr>
            <tr>
                <td>Diagnosa Penyakit</td>
                <td>:</td>
                <td>{{$ds->skd->diagnosa}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{$ds->skd ->pasien ->alamat}}</td>
            </tr>
        </table><br>

        <table>
            <tr>
                <td>
                    Diberikan istirahat selama {{$ds->skd ->tgl_in->format('d M Y')}} sampai {{$ds->skd ->tgl_out->format('d M Y')}}. <br>
                    Demikian surat keterangan ini diberikan untuk diketahui dan dipergunakan seperlunya.
                </td>
            </tr>
        </table>
        <div style="width: 30%; text-align: right; float: right;">
            Kuningan, {{$ds->skd ->tgl_in->format('d m Y')}} <br>
            {{$ds->skd->nama_dokter}}
        </div>
        <div style=" height: 100px; width: 100px; text-align: center; float: left; border: 1px solid;">
            <img style="height: 100px; width: 100px;" src="{{asset('qrcodes/'.$ds->qrcode)}}" alt="">
        </div>
    </div>
</body>

</html>
