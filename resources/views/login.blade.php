@extends('template.master')
@section('title', 'delete comment?')
@section('content')
<form action="/comment/delete/post/{{ $id }}" method="post">
    {{ csrf_field() }}
    <div class="field">
        <label class="label">Username</label>
        <input class="input" type="text" name="name" placeholder="Username"/>
    </div>
    <div class="field">
        <label class="label">Password</label>
        <input class="input" type="password" name="password" placeholder="Password"/>
    </div>
    <input class="button" type="submit" value="Konfirmasi Hapus">
</form>
@endsection
</body>
</html>