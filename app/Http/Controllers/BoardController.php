<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function createPost(Request $request)
    {
        // 投稿データの保存
        $post = new \App\Models\Post;
        $post->userName = $request->input('userName') ?? '名無し';
        $post->contents = $request->input('contents') ?? '';
        

        $post->posted = new \DateTime('Asia/Tokyo');
        $post->timestamps = false;
        $post->save(); 
        
        return redirect('/board');
    }
}
