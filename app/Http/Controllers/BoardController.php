<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class BoardController extends BaseController
{

    /**
     * 掲示板一覧
     *
     * @return View
     */
    public function index()
    {
        return view('board', ['name' => 'おぐおぐ']);
    }
}
