<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($id = 0)
    {
        if ($id == 0) {
            return view('news');
        } else if ($id != 'Game' && $id != 'Anime') {
            return view('error', ['id'=>$id]);
        } else {
            return view('news' . $id);
        }
    }

}
