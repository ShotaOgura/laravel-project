<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class BoardController extends BaseController
{

    /**
     * 掲示板一覧
     */
    public function index()
    {
        return view('board', ['name' => 'おぐおぐ']);
    }
}
