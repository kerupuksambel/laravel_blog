<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome!</title>
</head>
<body>
    @foreach ($article as $a)
        <h3>    
            <a href='blog/{{ $a->id }}'>
                {{ $a->title }}
            </a>
        </h3>
        <p>{{ $a->content }}</p>
    @endforeach
</body>
</html>