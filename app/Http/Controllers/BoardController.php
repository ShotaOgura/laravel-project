<?php

namespace App\Http\Controllers;

class BoardController extends Controller
{
    /**
     * 掲示板一覧
     */
    public function index()
    {
        return view('board', ['name' => 'おぐおぐ']);
    }
}
