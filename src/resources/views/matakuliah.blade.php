@extends('layouts.app')


@section('content')
<div class="container">
    <h2>Form Matakuliah</h2>
    <hr>
    <form action="{{ route("matakuliah.simpan") }}" method="post">
        <div class="form-group">
            <label for="nama">Nama Matakuliah</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <input type="submit" value="simpan" class="btn btn-success btn-lg btn-block">
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matakuliah as $item)
            <tr>
                <td>{{ $item->nama }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
