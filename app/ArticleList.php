<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleList extends Model
{
    //
    protected $fillable = [
        'title',
        'content'
    ];
}
