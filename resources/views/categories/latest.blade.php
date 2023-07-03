@extends('layouts.app')

@section('content')
    <h1>Latest Posts</h1>

    <ul>
        @foreach ($categories as $category)
            <li>
                {{ $category->name }} - {{ optional($category->latestPost)->title }}
            </li>
        @endforeach
    </ul>
@endsection
