<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;
use App\Users;

class CommentController extends Controller
{
    public function post($article_id, Request $request)
    {
        $data = Users::where('username', $request->name)->where('password', $request->password)->first();

        if($data){
            // dd($data);
            $sent = [
                'creator_id' => $data->id,
                'article_id' => $article_id,
                'title' => $request->title,
                'content' => $request->content,
                'created_at' => date('Y-m-d h:i:s')
            ];
            // dd($sent);
            Comment::create($sent);

            return redirect('/blog/'.$article_id);
        }else{
            return redirect('/blog/'.$article_id);
        }
    }
    
    public function create($id)
    {
        return view('post-comment', ['id' => $id]);
    }

    public function edit($id)
    {
        $res_c = Comment::where('id', $id)->first();
        return view('post-comment', ['comment_id' => $id, 'comment' => $res_c]);
    }

    public function edit_post($id, Request $request)
    {
        $cid = Comment::where('id', $id)->first()['creator_id'];
        $user_auth = Users::where('id', $cid)->first();
        // dd($request);
        if($user_auth->username == $request->name && $user_auth->password == $request->password){
            $comment = Comment::find($id);
            $comment->created_at = date('Y-m-d h:i:s');
            $comment->title = $request->title;
            $comment->content = $request->content;
            $article_id = $comment->article_id;
            $comment->save();

            return redirect('/blog/'.$article_id);
        }else{
            return redirect('/');
        }
    }

    public function delete($id)
    {
        # code...
    }
}
