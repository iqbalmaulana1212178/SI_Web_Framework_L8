<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <a href="/siswa">Kembali</a>
    <br/>
    <br/>

    @foreach ($siswa as $s)
    <form action="/siswa/update" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $s->id}}">
    <br/>
    <label for="">NIS</label>
    <input type="text" name="nis" required="required" value="{{ $s->nis }}">
    <br/>
    <label for="">Nama</label>
    <input type="text" name="nama" required="required" value="{{ $s->nama }}">
    <br/>
    <label for="">Kelas</label>
    <input type="text" name="kelas" required="required" value="{{ $s->kelas }}">
    <br/>
    <label for="">Alamat</label>
    <textarea name="alamat" required="required" value="{{ $s->alamat }}"></textarea>
    <br/>
    <input type="submit" value="Simpan">
</form>
@endforeach
</body>
</html>
