<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $users = [
            [
                "name" => "Trong",
                "email" => "trong@gmail.com",
                "address" => "HN"
            ],
            [
                "name" => "Duc",
                "email" => "duc@gmail.com",
                "address" => "HN"
            ]
        ];
        //xu ly logic
        return view('users.list', compact('users'));
    }

    function create()
    {
        return view('users.add');
    }

    function store() {
        // xu them vao database

        // quay tro lai trang danh sach

        return redirect()->route('users.index');
    }

    function edit($id) {
        dd($id);
    }
}
