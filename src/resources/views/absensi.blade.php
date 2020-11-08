@extends('layouts.app')


@section('content')
<div class="container">
    <h2>Form Absensi</h2>
    <hr>
    <form action="{{ route("absensi.simpan") }}" method="post">
        @csrf
        <div class="form-group">
            <label for="jadwal_id">Id Jadwal</label>
            <input type="text" name="jadwal_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="nim">Nim</label>
            <input type="text" name="nim" class="form-control">
        </div>
        <div class="form-group">
            <label for="tgl">Tangal</label>
            <input type="date" name="tgl" class="form-control">
        </div>
        <div class="form-select">
            <label for="hadir">Kehadiran</label>
            <select name="hadir" class="form-control">
                <option value="">- pilih -</option>
                <option value="h">Hadir</option>
                <option value="a">Absen</option>
                <option value="i">Izin</option>
                <option value="s">Sakit</option>
            </select>
        </div>
        <hr>
        <input type="submit" value="simpan" class="btn btn-success btn-lg btn-block">
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id Jadwal</th>
                <th>Nim</th>
                <th>Tanggal</th>
                <th>Kehadiran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($absensi as $item)
            <tr>
                <td>{{ $item->jadwal_id }}</td>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->tgl }}</td>
                <td>{{ $item->hadir }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
