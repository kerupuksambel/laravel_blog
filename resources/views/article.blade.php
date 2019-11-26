@extends('template.master')
@section('title', $article->title.' - blog!')

@section('content')
    <h1 id='title'>{{ $article->title }}</h1>
    <p id="content">{{ $article->content }}</p>
    <a href="/comment/{{ $article->id }}" class="button">Tulis Komentar</a>
    <div id="comments">
    @foreach ($comment as $c)
        <div class="comment">
            <h4>{{ $c->title }}</h4>
            <span>by <b>{{ $c->username }}</b></span>
            <p>{{ $c->content }}</p>
            <small>
                    <a href="/comment/edit/{{ $c->id }}">Edit</a> | <a href="/comment/delete/{{ $c->id }}">Hapus</a>
            </small>
        </div>
    @endforeach
    </div>
@endsection