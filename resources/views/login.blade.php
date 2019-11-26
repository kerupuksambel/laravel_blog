<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>delete comment?</title>
</head>
<body>
    <form action="/comment/delete/post/{{ $id }}" method="post">
        {{ csrf_field() }}
        <input type="text" name="name" placeholder="Username"/>
        <input type="password" name="password" placeholder="Password"/>
        <input type="submit" value="Konfirmasi Hapus">
    </form>
</body>
</html>