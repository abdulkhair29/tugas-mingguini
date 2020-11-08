@extends('layouts.app')


@section('content')
<div class="container">
    <h2>Form Dosen</h2>
    <hr>
    <form action="{{ route("dosen.simpan") }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nidn">Nomor Induk Dosen Nasional</label>
            <input type="text" name="nidn" class="form-control">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="telp">Telepon</label>
            <input type="text" name="telp" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control">
        </div>
        <input type="submit" value="simpan" class="btn btn-success btn-lg btn-block">
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nidn</th>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosen as $item)
            <tr>
                <td>{{ $item->nidn }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->telp }}</td>
                <td>{{ $item->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
