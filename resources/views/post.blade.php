@extends('layouts.app')

@section('title', 'Page d\'accueil')

@section('content')
    <h1>{{$post->title}}</h1>
    <p>auteur: {{$post->user->name}}</p>
    <p>content: {{$post->content}}</p>
    <p>categorie: {{$post->category->name}}</p>
    <p>nb commentaire: {{count($post->comments)}}</p>
    @foreach ($post->comments as $comment)
        <p>{{$comment->content}}</p>
    @endforeach
@endsection
Î