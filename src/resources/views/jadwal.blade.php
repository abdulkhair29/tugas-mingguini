@extends('layouts.app')


@section('content')
<div class="container">
    <h2>Form Jadwal</h2>
    <hr>
    <form action="{{ route("jadwal.simpan") }}" method="post">
        @csrf
        <div class="form-group">
            <label for="kelas_id">Id Kelas</label>
            <input type="text" name="kelas_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="matkul_id">Id Matakuliah</label>
            <input type="text" name="matkul_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="nidn">Nomor Induk Dosen Nasional</label>
            <input type="text" name="nidn" class="form-control">
        </div>
        <div class="form-group">
            <label for="noruang">No. Ruangan</label>
            <input type="text" name="noruang" class="form-control">
        </div>
        <div class="form-select">
            <label for="jeniskelamin">Hari</label>
            <select name="jeniskelamin" class="form-control">
                <option value="">- pilih -</option>
                <option value="senin">Senin</option>
                <option value="selasa">Selasa</option>
                <option value="rabu">Rabu</option>
                <option value="kamis">Kamis</option>
                <option value="jumat">Jum'at</option>
                <option value="sabtu">Sabtu</option>
            </select>
        </div>
      <div class="form-select">
            <label for="sesi">Sesi</label>
            <select name="sesi" class="form-control">
                <option value="">- pilih -</option>
                <option value="1">I</option>
                <option value="2">II</option>
            </select>
        </div>
        <hr>
        <input type="submit" value="simpan" class="btn btn-success btn-lg btn-block">
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id Kelas</th>
                <th>Id Matakuliah</th>
                <th>NIDN</th>
                <th>No.Ruangan</th>
                <th>Hari</th>
                <th>Sesi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwal as $item)
            <tr>
                <td>{{ $item->kelas_id }}</td>
                <td>{{ $item->matkul_id }}</td>
                <td>{{ $item->nidn }}</td>
                <td>{{ $item->noruang }}</td>
                <td>{{ $item->jeniskelamin }}</td>
                <td>{{ $item->sesi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

