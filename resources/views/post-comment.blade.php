@extends('template.master')
@section('title', 'post comment!')

@section('content')
        @if (isset($id))
            <form action="/comment/post/{{ $id }}" method="post">
            {{ csrf_field() }}
            <div class="field">
                <label class="label">Judul</label>
                <div class="control">
                    <input class='input' type="text" name="title" placeholder="Judul"><br/>
                </div>
            </div>
            <div class="field">
                <label class="label">Komentar</label>
                <div class="control">
                    <textarea class="textarea" name="content" cols="30" rows="10" placeholder="Komentar"></textarea><br/>
                </div>
            </div>
        @else
        <form action="/comment/edit/post/{{ $comment_id }}" method="post">
            {{ csrf_field() }}
            <div class="field">
                <label class="label">Judul</label>
                <div class="control">
                    <input class='input' type="text" name="title" placeholder="Judul" value="{{ $comment->title }}"><br/>
                </div>
            </div>

            <div class="field">
                <label class="label">Komentar</label>
                <div class="control">
                    <textarea class='textarea' name="content" cols="30" rows="10" placeholder="Komentar">{{ $comment->content }}</textarea><br/>
                </div>
            </div>
        @endif
        <div class="columns">
            <div class="field column">
                <label class="label">Username</label>
                <div class="control">
                    <input class='input' type="text" name="name" placeholder="Username">
                </div>
            </div>
            <div class="field column">
                <label class="label">Password</label>
                <div class="control">
                    <input class='input' type="text" name="password" placeholder="Password">
                </div>
            </div>
        </div>
        <input type="submit" value="Post" class="button is-info">
    </form>
@endsection