@extends('layout')

@section('content')
    <h1>所有的帖子</h1>

    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
    @endforeach
@endsection