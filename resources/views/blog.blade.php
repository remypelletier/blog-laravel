@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <div class="container">
        <h1>Bienvenue sur le blog</h1>
        <main class="blog">
            @foreach ($posts as $post)
            <a href="http://localhost:8000/blog/{{$post->slug}}" class="card">
                <img src="https://picsum.photos/300" class="card-img-top" alt="Cover image on the article">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{substr($post->content, 0, 100)}} ...</p>
                </div>
            </a>
            @endforeach
        </main>
    </div>
@endsection
