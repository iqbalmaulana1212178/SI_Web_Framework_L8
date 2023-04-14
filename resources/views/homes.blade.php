@extends('layouts.app')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">HOMEPAGE</h1>
            <p class=" lead">THIS IS THE HOME PAGE 2</p>
        </div>
        {{-- Contoh blade templating adalah memanggil value yang ada di controller dengan dua kurung kurawal
            lalu dilanjutkan dengan nama variabel {{ $nama_variabel }} --}}
        <p>Nama : {{ $nama }}</p>
        <p>NIM : {{ $nim }}</p>
        <p>Golongan : {{ $kelas }}</p>
        <p>Mata Kuliah : </p>
        <ul>
            @foreach ($Matkul as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endsection
