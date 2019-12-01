<?php

namespace App\Http\Controllers;

use App;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        if ($request->exp) {
            $users = User::where('experience', '>=', $request->exp)->orderBy('experience')->get();
            return view('users.users')->with(['users' => $users]);
        } else {
            $users = User::all();
            return view('users.users')->with(['users' => $users]);
        }
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(CreateUserRequest $request)
    {
        $user = User::create($request->all());
        return redirect()->route('users.show', $user->id);
    }

    /*
     * Если в параметрах прописать класс модели, то ларавел сам подставит туда результат из БД
     * */
    public function edit(User $user)
    {
        return view('users.edit')->with('user', $user);
    }

    public function update(CreateUserRequest $request, User $user)
    {
        $user->fill($request->all());
        $user->save();
        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        return view('users.show')->with('user', $user);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
