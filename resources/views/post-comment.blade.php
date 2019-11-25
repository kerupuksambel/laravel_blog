<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Comment </title>
</head>
<body>
    <form action="/comment/post/{{ $id }}" method="post">
        {{ csrf_field() }}
        <input type="text" name="title" placeholder="Judul"><br/>
        <textarea name="content" cols="30" rows="10" placeholder="Komentar"></textarea><br/>
        <input type="text" name="name" placeholder="Username"><br/>
        <input type="password" name="password" placeholder="Password"><br/>
        <input type="submit" value="Post">
    </form>
    
</body>
</html>