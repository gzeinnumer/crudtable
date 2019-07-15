<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //todo 29
    protected $fillable=['title', 'content', 'category_id', 'slug'];

}
