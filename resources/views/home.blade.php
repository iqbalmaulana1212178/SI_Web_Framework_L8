
{{-- Ini adalah folder view yang akan atau direturn oleh web.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"> Halaman Home</h1>
            <p class="lead"> Halaman ini merupakan halaman Home</p>
        </div>
        {{-- Contoh blade templating adalah memanggil value yang ada di controller dengan dua kurung kurawal
            lalu dilanjutkan dengan nama variabel {{ $nama_variabel }} --}}
        <p>Nama : {{ $nama }}</p>
        <p>Mata Kuliah : </p>
        <ul>
            @foreach ($Matkul as $item)
            <li>{{ $item }}</li>
                
            @endforeach
        </ul>
    </div>
</body>
</html>