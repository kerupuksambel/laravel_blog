<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['creator_id', 'article_id', 'title', 'content', 'created_at'];
    public $timestamps = FALSE;
}
