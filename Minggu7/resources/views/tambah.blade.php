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

    <form action="/siswa/store" method="POST">
    @csrf
    <label for="">NIS</label>
    <input type="text" name="nis" required="required">
    <br/>
    <label for="">Nama</label>
    <input type="text" name="nama" required="required">
    <br/>
    <label for="">Kelas</label>
    <input type="text" name="kelas" required="required">
    <br/>
    <label for="">Alamat</label>
    <textarea name="alamat" required="required"></textarea>
    <br/>
    <input type="submit" value="Simpan">
</form>
</body>
</html>
