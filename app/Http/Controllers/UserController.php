<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
class UserController extends Controller {

	public function index() {
		$users = User::all();
		return $this->success($users, 200);
	}
	public function store(Request $request) {
		$user = User::create([
          'name' => $request->get('name'),
					'email' => $request->get('email'),
				]);
		return $this->success("The user with with id #{$user->id} has been created", 201);
	}
	public function show($id) {
		$user = User::find($id);
		if(!$user){
			return $this->error("The user with id #{$id} doesn't exist", 404);
		}
		return $this->success($user, 200);
	}
	public function update(Request $request) {
		$user = User::find($request->get('id'));
		if(!$user){
			return $this->error("The user with id #{$id} doesn't exist", 404);
		}
		$user->name = $request->get('name');
		$user->email = $request->get('email');
		$user->save();
		return $this->success("The user with with id #{$user->id} has been updated", 200);
	}
	public function destroy($id) {
		$user = User::find($id);
		if(!$user){
			return $this->error("The user with id #{$id} doesn't exist", 404);
		}
		$user->delete();
		return $this->success("The user with with id #{$id} has been deleted", 200);
	}
}
