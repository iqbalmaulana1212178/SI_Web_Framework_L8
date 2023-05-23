<!DOCTYPE html>
<html>
    <head>
     <title>Request dengan input laravel</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/boostrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Form Validation dengan laravel</h1>
                <form action="/formulir/proses" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="control-label">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" class="form-control
                        {{ $errors->has('nama') ? ' is-invalid' : ''}}" placeholder="Nama Lengkap" value="{{ old('nama')}}">
                        @if ($errors->has('nama'))
                            <span class="text-danger small">
                                <p>{{ $errors->first('nama') }}</p>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="control-label">Alamat</label>
                        <textarea rows="3" id="alamat" name="alamat" class="form-control 
                        {{ $errors->has('alamat') ? 'is-invalid' : ''}}" placeholder="Alamat" value="{{ old('alamat') }}"></textarea>
                        @if ($errors->has('alamat'))
                            <span class="text-danger small">
                                <p>{{ $errors->first('alamat')}}</p>
                            </span>
                        @endif
                    </div>
                    <input type="submit" value="simpan" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>
</html>