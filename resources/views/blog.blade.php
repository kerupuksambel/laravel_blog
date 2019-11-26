@extends('template.master')
@section('title', 'blog!')
@section('content')
    @foreach ($article as $a)
    <h3>    
        <a href='blog/{{ $a->id }}'>
            {{ $a->title }}
        </a>
    </h3>
    <p>{{ $a->content }}</p>
    @endforeach
@endsection