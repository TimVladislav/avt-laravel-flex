<?php

namespace App\Http\Controllers;


use App\User;
use App\Work;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard() {
        $last_users = User::all()->sortByDesc('created_at')->take(3);
        $last_works = Work::all()->sortByDesc('created_at')->take(3);
        return view('admin.dashboard', [
            'last_users'    =>  $last_users,
            'last_works'    =>  $last_works,
        ]);
    }

    function users() {
        $users = User::all();
        return view('admin.users.users', [
           'users'  =>  $users,
        ]);
    }

    function profile($id) {
        $user = User::find($id);
        return view('admin.users.profile', [
            'user'  =>  $user,
        ]);
    }

    function works() {
        $works = Work::all();
        return view('admin.works.works', [
            'works' =>  $works,
        ]);
    }

    function work($id) {
        $work = Work::find($id);
        return view('admin.works.work');
    }
}
