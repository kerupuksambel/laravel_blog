<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Blog;
use App\Comment;
use App\Users;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Blog::all();

        return view('blog', ['article' => $data]);
    }

    public function article($id)
    {
        $user = Users::all();
        $data = Blog::where('id', $id)->orderBy('created_at')->get();
        $comment = Comment::where('article_id', $id)->get();
        foreach ($comment as $key => $c){
            $comment[$key]->username = Users::where('id', $c->creator_id)->select('username')->get()[0]['username'];
        }
        return view('article', [
            'article' => $data[0],
            'comment' => $comment]
        );
    }
}
