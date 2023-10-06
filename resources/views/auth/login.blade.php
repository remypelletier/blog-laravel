@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Se connecter</h1>
    <form action="{{route('auth.login')}}" method="POST">

        @csrf

        @error('form')
        <div class="p-1 mb-4 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
            {{$message}}
        </div>    
        @enderror

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
        </div>
        @error('email')
        <div class="p-1 mb-4 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
            {{$message}}
        </div>
        @enderror
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        @error('password')
        <div class="p-1 mb-4 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
            {{$message}}
        </div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
