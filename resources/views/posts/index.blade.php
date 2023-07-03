@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    <ul>
        @foreach ($posts as $post)
            <li>
                {{ $post->title }} - {{ $post->category->name }}
            </li>
        @endforeach
    </ul>
@endsection
