<?php
namespace App\Http\Controllers;
use App\Sass;
use Illuminate\Http\Request;

class SassController extends Controller {

	public function index(){
		$sassies = Sass::all();
		return $this->success($sassies, 200);
	}
	public function store(Request $request){
		$this->validateRequest($request);
		$sass = Sass::create([
					'sass_comment' => $request->get('sass_comment'),
					'user_id' => $request->get('user_id'),
				]);
		return $this->success("The sass with with id {$sass->id} has been created", 201);
	}
	public function show($user_id){
		$sass = Sass::where('user_id', $user_id)->get();
		if(!$sass){
		return $this->error("The sass with {$user_id} doesn't exist", 404);
		}
		return $this->success($sass, 200);
	}
	public function update(Request $request){
		$this->validateRequest($request);
		$sass = Sass::find($request->get('sass_id'));
		if(!$sass){
			return $this->error("The sass with {$id} doesn't exist", 404);
		}
		$sass->sass_comment = $request->get('sass_comment');
		$sass->save();
		return $this->success("The sass with with id {$sass->id} has been updated", 200);
	}
	public function destroy($id){
		$sass = Sass::find($id);
		if(!$sass){
			return $this->error("The sass with {$id} doesn't exist", 404);
		}
		$sass->delete();
		return $this->success("The sass with with id {$id} has been deleted along with it's comments", 200);
	}
	public function validateRequest(Request $request){
		$rules = [
			'sass_comment' => 'required',
		];
		$this->validate($request, $rules);
	}
	public function isAuthorized(Request $request){
		$resource = "sassies";
		$sass     = Sass::find($this->getArgs($request)["sass_id"]);
		return $this->authorizeUser($request, $resource, $sass);
	}
}

//
// <?php
// namespace App\Http\Controllers;
// use App\Sass;
// use Illuminate\Http\Request;
// // use Illuminate\Support\Facades\Hash;
// class SassController extends Controller {
//
// 	public function index($user_id){
// 		$user = User::find($user_id);
// 		if(!$user){
// 			return $this->error("The user with {$user_id} doesn't exist", 404);
// 		}
// 		$sassies = $user->sassies;
// 		return $this->success($sassies, 200);
// 	}
// 	public function store(Request $request, $user_id){
//
// 		$user = User::find($user_id);
// 		if(!$user){
// 			return $this->error("The user with {$user_id} doesn't exist", 404);
// 		}
// 		$this->validateRequest($request);
// 		$sass = Sass::create([
// 				'content' => $request->get('content'),
// 				'user_id'=> $this->getUserId(),
// 				'user_id'=> $user_id
// 			]);
// 		return $this->success("The sass with id {$sass->id} has been created and assigned to the user with id {$user_id}", 201);
// 	}
// 	public function update(Request $request, $user_id, $sass_id){
// 		$sass 	= Sass::find($sass_id);
// 		$user 		= User::find($user_id);
// 		if(!$sass || !$user){
// 			return $this->error("The sass with {$sass_id} or the user with id {$user_id} doesn't exist", 404);
// 		}
// 		$this->validateRequest($request);
// 		$sass->content 		= $request->get('content');
// 		$sass->user_id 		= $this->getUserId();
// 		$sass->user_id 		= $user_id;
// 		$sass->save();
// 		return $this->success("The sass with with id {$sass->id} has been updated", 200);
// 	}
// 	public function destroy($user_id, $sass_id){
//
// 		$sass 	= Sass::find($sass_id);
// 		$user 		= User::find($user_id);
// 		if(!$sass || !$user){
// 			return $this->error("The sass with {$sass_id} or the user with id {$user_id} doesn't exist", 404);
// 		}
// 		if(!$user->sassies()->find($sass_id)){
// 			return $this->error("The sass with id {$sass_id} isn't assigned to the user with id {$user_id}", 409);
// 		}
// 		$sass->delete();
// 		return $this->success("The sass with id {$sass_id} has been removed of the user {$user_id}", 200);
// 	}
// 	public function validateRequest(Request $request){
// 		$rules = [
// 			'content' => 'required'
// 		];
// 		$this->validate($request, $rules);
// 	}
// 	public function isAuthorized(Request $request){
// 		$resource  = "sassies";
// 		$sass   = Sass::find($this->getArgs($request)["sass_id"]);
// 		return $this->authorizeUser($request, $resource, $sass);
// 	}
// }
