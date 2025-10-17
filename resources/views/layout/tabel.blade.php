@extends('layout.layout')

@section('content')
    <h2>Daftar Mahasiswa</h2>

    <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Alan</td>
                <td>210101</td>
                <td>Informatika</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Budi</td>
                <td>210102</td>
                <td>Sistem Informasi</td>
            </tr>
        </tbody>
    </table>
@endsection
