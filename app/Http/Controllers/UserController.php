<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name  = 'Tinnakorn';
        $users = [
            'name'  => 'bell',
            'email' => 'tinnakorn@gmail.com'
        ];
        return view('user', compact('name', 'users'));
    }
}
