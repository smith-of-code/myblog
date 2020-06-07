<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function list ()
    {
        return view('admin.userList')->with('users', User::all());

    }



    public function update (Request $request, User $user)
    {

        if ($request->isMethod('post')) {

            if ($user->id == 1 && $request->get('is_admin') == 0){

                return view('admin.userList')
                    ->with('users', User::all())
                    ->with('success', 'Невозможно поменять права пользователя');
            }
            $user->fill($request->all())->save();

            return view('admin.userList')
                ->with('users', User::all())
                ->with('success', 'Пользователь обновлен');
        }
        return redirect()->back();
    }

    public function destroy (Request $request, User $user)
    {
        if ($user->id == 1){

            return view('admin.userList')
                ->with('users', User::all())
                ->with('success', 'Невозможно удалить пользователя');
        }
        $user->delete();
        return redirect()->route('admin.users.list');

    }
}
