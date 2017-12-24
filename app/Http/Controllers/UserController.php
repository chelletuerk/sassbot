<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller {

    public function createUser(Request $req) {
        $user = User::create($req->all());
        return response()->json($user);
    }

    public function updateUser(Request $req, $id) {
      $user = User::find($id);
      $user-> = $req->input('name');
      $user-> = $req->input('email');
      $car->save();

      return response()->json($user);
    }

    public function deleteUser($id) {
      $user = User::find($id);
      $user->delete();

      return response()->json('Removed successfully.');
    }

    public function index() {
      $users = User::all();
      return response()->json($user);
    }
}
