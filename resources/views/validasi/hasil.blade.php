<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light"
        style="background-color: #800000;>
        <div class="container-fluid">
        <a href="index" class="navbar-brand"><img src="img/logo.png" style="max-height:30px"></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="#" class="nav-link font-weight-bold cus-font text-light"
                    style="text-decoration:none;color:white">Admin Page</a>
            </li>
        </ul>
        </div>
    </nav>

    <div class="pos-mid" style="height:90%; margin:auto;">
        <form action="index" autocomplete="off">
            <div class="form-group pos-mid">
                <img src="img/logounsika.png" style="max-height:100px">
            </div>
            {{-- alert --}}

            <div class="form-group ">
                <input type="text" class="form-control" value="{{$data->hash}}" disabled readonly required>
                <small class="text-light">Valid Digital Signature</small>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" value="{{$data->skd->no_surat}} " readonly required>
                <small class="text-light">Valid Nomor Seri Ijazah</small>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" value="{{$data->skd->pasien->nama}} " readonly required>
                <small class="text-light">Valid PIN Ijazah</small>
            </div>
            <div class="form-group">
                <input type="text"class="form-control" value="{{$data->skd->nama_dokter}}" readonly required>
                <small class="text-light">Valid Nama Lengkap</small>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" value="{{$data->skd->diagnosa}}" readonly required>
                <small class="text-light">Valid Nomor Pokok Mahasiswa</small>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" value=" {{$data->skd->tgl_in}}" readonly required>
                <small class="text-light">Valid Indeks Prestasi
                    Kumulatif</small>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" value=" {{$data->skd->tgl_out}}" readonly required>
                <small class="text-light">Valid Indeks Prestasi
                    Kumulatif</small>
            </div>

            <a class="btn btn-outline-light btn-block" style="margin:auto; font- family:'Roboto';"
                href="index">KEMBALI</a>
        </form>
    </div>



</body>

</html>
