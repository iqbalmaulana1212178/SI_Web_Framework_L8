@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog">
                @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search for post" name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                  </div>
            </form>
        </div>
    </div>

    @if ($post->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/random/1200x400?{{ $post[0]->category->name }}" class="card-img-top"
                alt="{{ $post[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title">
                    <a href="/blog/{{ $post[0]->slug }}" class="text-decoration-none text-dark">
                        {{ $post[0]->title }}
                </h3> 
                </a>
                <p class="card-text">
                    <small class="text-muted">
                        By. <a class="text-decoration-none"
                            href="/blog?author={{ $post[0]->author->username }}">{{ $post[0]->author->name }}</a>
                        In Category :
                        <a href="/blog?category={{ $post[0]->category->slug }}"
                            class="text-decoration-none">{{ $post[0]->category->name }}</a>
                        {{ $post[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $post[0]->excerpt }}</p>
                <a href="/blog/{{ $post[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>
   

    <div class="container">
        <div class="row">
            @foreach ($post->skip(1) as $item)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute p-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                       <a href="/blog?category={{ $item->category->slug }}" class="text-white text-decoration-none">
                           {{ $item->category->name }}
                        </a> 
                    </div>
                    <img src="https://source.unsplash.com/random/500x400?{{ $item->category->name }}"
                    class="card-img-top" alt="{{ $item->category->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">
                            <small class="text-muted">
                                By. <a class="text-decoration-none"
                                href="/blog?author={{ $item->author->username }}">{{ $item->author->name }}</a>
                                
                                {{ $item->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $item->excerpt }}</p>
                        <a href="/blog/{{ $item->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    @else
    <p class="text-center fs-4">No post found.</p>
@endif

<div class="d-flex justify-content-center">

    {{ $post->links() }}
</div>

    {{-- @foreach ($post->skip(1) as $item)
        <article class="mb-5 border-bottom pb-4">
            <h2>
                <a href="/blog/{{ $item->slug }}" class="text-decoration-none">{{ $item->title }}</a>
            </h2>
            <p>By. <a class="text-decoration-none"
                    href="/authors/{{ $item->author->username }}">{{ $item->author->name }}</a>
                In Category :
                <a href="/categories/{{ $item->category->slug }}"
                    class="text-decoration-none">{{ $item->category->name }}</a>
            </p>
            <p>{{ $item->excerpt }}</p>

            <a href="/blog/{{ $item->slug }}" class="text-decoration-none">Read more ...</a>
        </article>
    @endforeach --}}
@endsection
