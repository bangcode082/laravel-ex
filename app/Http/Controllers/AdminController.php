<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class AdminController extends Controller
{
    private $users;
    public function index(Request $request)
    {
      $users = new User;
      return view('admin')->with('users', $users->all());
    }

    public function addUser(Request $request)
    {
      return view('adduser');
    }

    public function saveUser(Request $request)
    {
      $users = new User;
      $users->create([
        'name' => $request->name,
        'email' => $request->email,
        'username' => $request->username,
        'password' => bcrypt($request->password),
        'role' => $request->role
      ]);
      if ($users) {
        return redirect('admin');
      }
    }

    public function delUser(Request $request, $id)
    {
      $users = User::find($id);
      if ($users) {
        $users->delete();
        return redirect('admin');
      }
    }
}
