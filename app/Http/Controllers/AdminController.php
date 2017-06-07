<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class AdminController extends Controller
{
    public function index(Request $request)
    {
      $users = new User;
      return view('admin')->with('users', $users->all());
    }

    public function addUser(Request $request)
    {
      # code...
    }

    public function saveUser(Request $request)
    {
      # code...
    }

    public function delUser(Request $request)
    {
      # code...
    }
}
