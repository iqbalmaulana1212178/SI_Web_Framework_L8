<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File Dengan Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class ="row">
        <div class="container">
            <h2 class="text-center my-5">Upload file dengan Laravel </h2>
            <div class="col-lg-8 mx-auto my-5">
                {{-- Peringatan Jika erorr --}}
                @if (count($errors) > 0)
                <div class="alert alert-denger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br/>
                    @endforeach
                </div>
                @endif

                <form action="{{ route('upload.proses') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <b>File Gambar</b><br/>
                    <input type="file" name="file">

                <div class="form-group">
                    <b>Keterangan</b>
                    <textarea class="form-control" name="keterangan">
                    </textarea>
                </div>
                <input type="submit"value="Upload" class="btn btn-primary">
                </form>
                @if (session('success'))
                <div class="alert alert-succes alert-dismissible">
                    <a href="#" class="close text-decoration-none"
                    data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('success')}}
                </div>
                @endif
                @if (session ('error'))
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close text-decoration-none"
                    data-dismiss="alert" aria-label="close">&times;</a>
                    {{session('error')}}
                </div>
                @endif
            </div>
        </div>
    </div>
    </body>
    </html>
