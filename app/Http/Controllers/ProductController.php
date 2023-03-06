<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product');
    }
    public function pocof1()
    {
        return view('pocof1');
    }
    public function mi10t()
    {
        return view('mi10t');
    }
    public function note5()
    {
        return view('note5');
    }
    public function note4x()
    {
        return view('note4x');
    }
    public function r2prime()
    {
        return view('r2prime');
    }
}
