<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public static function ShowIndex()
    {
        return view("index");
    }
}
