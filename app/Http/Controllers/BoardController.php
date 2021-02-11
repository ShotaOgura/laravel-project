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


    public function create()
    {
        // DBアクセスするための道具を用意
        $dsn =  'mysql:dbname=heroku_e6179ad37a6d96b;host=us-cdbr-east-03.cleardb.com;charset=utf8mb4';
        $username = 'bc12c43204e33e';
        $password = '04bfef93';
        $pdo = new PDO($dsn, $username, $password);

        $stmt = $pdo->prepare("INSERT INTO `posts` (`userName`, `posted`, `contents`) VALUES(?, NOW(), ?)");
        $stmt->execute([$_POST["userName"], $_POST["contents"]]);

        // 接続を閉じる
        $pdo = null;

    }
}
