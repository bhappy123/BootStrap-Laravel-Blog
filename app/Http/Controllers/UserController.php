<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getAllUserBlogs($id){
        return User::find($id)->getUserBlogs;
    }
}
