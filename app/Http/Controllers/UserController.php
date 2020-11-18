<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    function index()
    {
        $users = $this->userService->getAll();
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
