<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('auth.user', compact('users'));
    }
    public function edit(User $user){
	    return view('auth.edit', compact('user'));
    }
    public function update(Request $request, User $user){
        $data = $request->only('name', 'email');
        $password=$request->input('password');
        if($password)
            $data['password'] = bcrypt($password);
        
        $user->update($data);
        return redirect()->route('administradores')->with('success', 'Usuario actualizado correctamente');

    }
    public function destroy(User $user){
        $user->delete();
        return back()->with('success', 'Usuario eliminado correctamente');
    }

    public function store(Request $request)
    {
        User::create($request->only('name', 'email')
            + [
                'password' => bcrypt($request->input('password')),
            ]);
        return redirect()->route('administradores')->with('success', 'Usuario creado correctamente');
    }
}
