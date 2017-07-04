<?php

namespace App\Http\Controllers;

use App\Category;
use App\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    function index() {
        $works = Work::all();
        $categories = Category::all();

        return view('works', [
            'works'         =>  $works,
            'categories'    =>  $categories,
        ]);
    }
}
