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
     *  TODO 投稿を追加する
     */
    public function createPost()
    {
        // 
        $stmt = $pdo->prepare("INSERT INTO `posts` (`userName`, `posted`, `contents`) VALUES(?, NOW(), ?)");
        $stmt->execute([$_POST["userName"], $_POST["contents"]]);

        // 接続を閉じる
        $pdo = null;

    }
}
