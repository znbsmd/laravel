<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ArticleList;
class ArticleController extends Controller
{
    public  function index(){
        $article=ArticleList::orderby('created_at')->get();
        return view("article/articlelist", ['article' =>$article]);
    }
    public  function show(Request $request,ArticleList $articleList){
        return view("article/articleshow",compact('articleList'));
    }
    public  function edit(ArticleList $articleList){
        return view('article/articleedit', compact('articleList'));
    }
    public function imageUpload(Request $request)
    {
        $path = $request->file('wangEditorH5File')->storePublicly(md5(time()));
        return asset('storage/'. $path);
    }
    public function update(Request $request, ArticleList $articleList)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255|min:4',
            'content' => 'required|min:100',
        ]);

        $articleList->update(request(['title', 'content']));
        return redirect("/article/{$articleList->id}");
    }
    public function delete(Request $request, ArticleList $articleList){
        $articleList->delete(request(['id']));
        return redirect("/article");

    }
}
