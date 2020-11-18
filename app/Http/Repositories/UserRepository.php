<?php


namespace App\Http\Repositories;


use App\Models\User;

class UserRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    function getAll() {
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
        return $users;
    }
}
