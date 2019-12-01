<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Http\Requests\CreateUserRequest;

class UsersController extends Controller
{
    public function index(Request $request){
        $exp = $request->exp;
        if($exp){
            $users = App\User::where('experience', '>=', $exp)->orderBy('experience')->get();
            return view('users.users')->with('users', $users);
        }else{
            $users = App\User::all();
            return view('users.users')->with('users', $users);
        }        
    }
    
    public function create(){
        return view('users.create');
    }

    public function store(CreateUserRequest $request){
        $user = App\User::create($request->all());
        return redirect()->route('users.show', $user->id);
    }

    public function edit($user_id){
        $user = App\User::find($user_id);
        return view('users.edit')->with('user', $user);
    }
  
    public function update(CreateUserRequest $request, $user_id){
        $user = App\User::find($user_id);
        $user->fill($request->all());
        $user->save();

        return redirect()->route('users.index');
    }

    public function show($user_id){
        $user = App\User::find($user_id);
        return view('users.show')->with('user', $user);
    }

    public function destroy($user_id){
        App\User::find($user_id)->delete();
        return redirect()->route('users.index');
    }
}
