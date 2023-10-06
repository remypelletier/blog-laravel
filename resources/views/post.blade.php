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
    @auth
    <form action="{{route('comment')}}" method="POST">
        @csrf
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="comment" name="comment"></textarea>
            <label for="floatingTextarea">Comments</label>
            <input type="hidden" name="post" value="{{$post->id}}">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>        
    @endauth
    @guest
        <p>Connectez-vous pour ajouter un commentaire</p>
    @endguest
@endsection
Î