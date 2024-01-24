<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = User::orderBy('id','DESC')->get();
        return view('admin.user.index', compact('data'));
    }
}
