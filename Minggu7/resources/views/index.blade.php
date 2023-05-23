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
    <a href="/siswa/tambah"> + Tambah Siswa Baru +</a>
    <br/>
    <br/>

    <table border="1">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        @foreach ($siswa as $s )
        <tr>
            <td>{{ $s->nis }}</td>
            <td>{{ $s->nama }}</td>
            <td>{{ $s->kelas }}</td>
            <td>{{ $s->alamat }}</td>
            <td>
                <a href="/siswa/edit/{{ $s->id }}">Edit</a>
                <a href="/siswa/hapus/{{ $s->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
