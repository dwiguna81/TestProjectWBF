<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function test()
    {
        return view('test');
    }

    public function search()
    {
        return view('search');
    }

    public function testsearch(Type $var = null)
    {
        return view('testsearch');
    }
}
