<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $article->title }} - blog!</title>
</head>
<body>
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>
    <a href="/comment/{{ $article->id }}">Tulis Komentar</a>
    @foreach ($comment as $c)
        <h4>{{ $c->title }}</h4>
        <small>by <b>{{ $c->username }}</b></small>
        <p>{{ $c->content }}</p>
        <small>
                <a href="/comment/edit/{{ $c->id }}">Edit</a> | <a href="/comment/delete/{{ $c->id }}">Hapus</a>
        </small>
    @endforeach
</body>
</html>