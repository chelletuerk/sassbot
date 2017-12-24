<?php

namespace App\Http\Controllers;

use App\Sass;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SassController extends Controller {

    public function createSass(Request $req) {
        $user = Sass::create($req->all());
        return response()->json($user);
    }

    public function updateSass(Request $req, $id) {
      $user = Sass::find($id);
      $user-> = $req->input('name');
      $user-> = $req->input('email');
      $car->save();

      return response()->json($user);
    }

    public function deleteSass($id) {
      $user = Sass::find($id);
      $user->delete();

      return response()->json('Removed successfully.');
    }

    public function index() {
      $users = Sass::all();
      return response()->json($user);
    }
}
