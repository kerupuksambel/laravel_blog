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
    <a href="/comment/post/{{ $article->id }}">Post Comment</a>
    @foreach ($comment as $c)
        <h4>{{ $c->title }}</h4>
        <p>{{ $c->content }}</p>
    @endforeach
</body>
</html>