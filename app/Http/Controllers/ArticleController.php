<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Blog;
use App\Comment;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Blog::all();

        return view('blog', ['article' => $data]);
    }

    public function article($id)
    {
        $data = Blog::where('id', $id)->get();
        $comment = Comment::where('article_id', $id)->get();
        return view('article', [
            'article' => $data[0],
            'comment' => $comment]
        );
    }
}
