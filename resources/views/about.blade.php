@extends('layouts.main')
@section('container')
<h4>{{ $email }}</h4>
<img src="img/{{ $image }}" alt="" class="img-thumbnail alert-danger rounded-circle">
@endsection