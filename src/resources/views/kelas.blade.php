@extends('layouts.app')


@section('content')
<div class="container">
    <h2>Form Kelas</h2>
    <hr>
    <form action="{{ route("kelas.simpan") }}" method="post">
        @csrf
        <div class="form-group">
            <label for="namakelas">Nama Kelas</label>
            <input type="text" name="namakelas" class="form-control">
        </div>
        <div class="form-select">
            <label for="sesi">Sesi</label>
            <select name="sesi" class="form-control">
                <option value="">- pilih -</option>
                <option value="pagi">Pagi</option>
                <option value="malam">Malam</option>
            </select>
        </div>
      <div class="form-select">
            <label for="jurusan">jurusan</label>
            <select name="jususan" class="form-control">
                <option value="">- pilih -</option>
                <option value="ti">Teknik Informatika</option>
                <option value="si">Sistem Informasi</option>
            </select>
        </div>
        <hr>
        <input type="submit" value="simpan" class="btn btn-success btn-lg btn-block">
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Kelas</th>
                <th>Sesi</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $item)
            <tr>
                <td>{{ $item->namakelas }}</td>
                <td>{{ $item->sesi }}</td>
                <td>{{ $item->jurusan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
