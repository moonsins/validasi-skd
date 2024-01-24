@extends('layouts.master')



@section('content')
    <h1>Data Pasien</h1>
    <a href="/pasien/create" class="btn btn-primary btn-sm">Tambah</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nomor Handphone</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Nomor SKD</th>
                <th scope="col">Aksi</th>
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
                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Tidak Ada Data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
