@extends('layouts.app')


@section('content')
<div class="container">
    <h2>Form Mahasiswa</h2>
    <hr>
    <form action="{{ route("mahasiswa.simpan") }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nim">Nim</label>
            <input type="text" name="nim" class="form-control">
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
                <th>Nim</th>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $item)
            <tr>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->telp }}</td>
                <td>{{ $item->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
