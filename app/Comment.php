<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    protected $guarded = [];

    public function child()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
