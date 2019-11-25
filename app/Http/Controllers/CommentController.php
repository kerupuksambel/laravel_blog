<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;
use App\Users;

class CommentController extends Controller
{
    public function post(Request $request)
    {
        dd($request);
    }
    
    public function display_form($id){
        return view('post-comment', ['id' => $id]);
    }
}
