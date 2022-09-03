<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        
        // タイムアウトしたらログイン画面に飛ばす、そうでなければ元の処理
        if (\Auth::id() == null)
        {
            return view ('auth.login');
        } 
        else
        {
            return view('users.show', compact('user'));
        }
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        if (\Auth::id() == null)
        {
            return view ('auth.login');
        } 
        else
        {
            return view('users.edit', compact('user'));
        }
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'name' => [
                'required', 'string', 'max:255'
            ],
            'email' => [
                'required', 'string', 'email', 'max:255',
                Rule::unique('users')->ignore($id),
            ],
            'password' => [
                'required', 'string', 'min:8', 'confirmed',
            ],
    ]);

        $user = \Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect(route('user.show', $user->id))->with('judge', 'プロフィールを変更しました');
    }
}
