@extends('layout.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Pasien</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <a href="/pasien/create" class="btn btn-primary mb-3">Tambah</a>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Pekerjaan</th>
                        <th>Alamat</th>
                        <th>Nomor Handphone</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pasien as $key => $value)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->nik }}</td>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->pekerjaan }}</td>
                        <td>{{ $value->alamat }}</td>
                        <td>{{ $value->no_hp }}</td>
                        <td>{{ $value->tmptlahir }}</td>
                        <td>{{ $value->tgllahir }}</td>
                        <td><a href="/skd/{{ $value->id }}/create" class="btn btn-success btn-sm">Buat SKD</a></td>
                        <td>
                            <form action="/pasien/{{ $value->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="/pasien/{{ $value->id }}/edit" class="btn btn-info btn-sm">EDIT</a>
                                <button type="button" value="Delete" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#modal-hapus">
                                    Hapus</button>
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Tidak Ada Data</td>
                    </tr>
                @endforelse
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
