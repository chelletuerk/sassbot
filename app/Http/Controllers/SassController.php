<?php
namespace App\Http\Controllers;
use App\Sass;
use Illuminate\Http\Request;

class SassController extends Controller {

	public function index(){
		$sassies = Sass::all();
		return $this->success($sassies, 200);
	}
	public function store(Request $request) {
		$sass = Sass::create([
					'sass_comment' => $request->get('sass_comment'),
					'user_id' => $request->get('user_id'),
				]);
		return $this->success("The sass with with id {$sass->id} has been created", 201);
	}
	public function show($user_id) {
		$sass = Sass::where('user_id', $user_id)->get();
		if(!$sass){
		return $this->error("The sass with {$user_id} doesn't exist", 404);
		}
		return $this->success($sass, 200);
	}
	public function update(Request $request) {
		$sass = Sass::find($request->get('sass_id'));
		if(!$sass){
			return $this->error("The sass with {$id} doesn't exist", 404);
		}
		$sass->sass_comment = $request->get('sass_comment');
		$sass->save();
		return $this->success("The sass with with id {$sass->id} has been updated", 200);
	}
	public function destroy($id) {
		$sass = Sass::find($id);
		if(!$sass){
			return $this->error("The sass with {$id} doesn't exist", 404);
		}
		$sass->delete();
		return $this->success("The sass with with id {$id} has been deleted along with it's comments", 200);
	}
}
