<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body'];

    public function post()
    {
        return $this->belongsTo('App\Post', 'post_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
