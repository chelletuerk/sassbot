<?php

namespace App\Http\Controllers;

use App\Sass;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SassController extends Controller {

    public function createSass(Request $req) {
        $sass = Sass::create($req->all());
        return response()->json($sass);
    }

    public function updateSass(Request $req, $id) {
      $sass = Sass::find($id);
      $sass-> = $req->input('sass_comment');
      $car->save();

      return response()->json($sass);
    }

    public function deleteSass($id) {
      $sass = Sass::find($id);
      $sass->delete();

      return response()->json('Removed successfully.');
    }

    public function index() {
      $sasses = Sass::all();
      return response()->json($sasses);
    }
}
