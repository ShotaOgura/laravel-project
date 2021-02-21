<?php

namespace App\Http\Controllers;

class BoardController extends Controller
{
    /**
     * 掲示板一覧
     */
    public function index()
    {

        // DBから投稿のデータとってくる
        $posts = \App\Models\Post::all();

        // 画面に渡す
        return view('board', ['posts' => $posts]);
    }


    /**
     * 投稿を追加する
     */
    public function createPost()
    {
        // 投稿データの保存
        $post = new \App\Models\Post;
        $post->userName = 'test';
        $post->posted = '2021-2-21 13:44:00';
        $post->contents = '初登校デフ！！！ぽよーーーーーー！！！';
        $post->save(); 
        
        return redirect('/board');
    }
}
