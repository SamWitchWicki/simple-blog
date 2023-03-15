@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">

                <a href="/dashboard/posts" class="btn btn-success mb-3"><i class="bi bi-arrow-90deg-left"></i> Back to all my Post</a>

                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mb-3"><i class="bi bi-pencil-square"></i> edit</a>

                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger mb-3" onclick="return confirm('Are you sure?')"><i class="bi bi-trash-fill"></i> Delete</button>
                </form>

                <h1 class="mb-3">{{ $post->title }}</h1>

                @if ($post->image)
                    <div style="max-height: 550px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mb-3 mt-3" alt="{{ $post->category->name }}">
                    </div>
                    @else
                    <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" class="img-fluid mb-3 mt-3" alt="{{ $post->category->name }}">
                @endif

                <article class="my-3 fs-5">
                {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection