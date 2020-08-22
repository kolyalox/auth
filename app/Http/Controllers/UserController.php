<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {

    public function index(){
        $user = new User;
        return view('users', ['data' => $user->all()]);

    }

    public function show(User $user) {
        return view('usersInfo', ['data' => $user]);
    }

}
