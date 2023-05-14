@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $title }}</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $item)
                
            <div class="col-md-4 mb-4">
                <a href="/blog?category={{ $item->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/random/500x500?{{ $item->name }}" class="card-img" alt="{{ $item->name }}">
                    <div class="card-img-overlay d-flex align-items-center">
                        <h5 class="card-title text-center flex-fill p-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $item->name }}</h5>
                    </div>
                </div>

                </a>
            </div>
            @endforeach

        </div>
    </div>
    {{-- @foreach ($categories as $item)
        <ul>
            <li>
                <h1>
                    <a href="/categories/{{ $item->slug }}">{{ $item->name  }}</a>
                </h1>
            </li>
        </ul>
    @endforeach --}}
@endsection


