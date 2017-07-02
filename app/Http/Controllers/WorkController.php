<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    function index() {
        $works = Work::all();

        return view('works', [
            'works' =>  $works,
        ]);
    }
}
