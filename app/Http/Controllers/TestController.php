<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ArticleList;
class TestController extends Controller
{
    public  function index(){
        $article=ArticleList::orderby('created_at')->get();
//        dd($article);
        return view("article/articlelist", ['article' =>$article]);
    }
}
