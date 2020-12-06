<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_detail;

class UserController extends Controller
{
    public function addUser()
    {
        return view('add-user');
    }
    public function create(Request $request)
    {
        // dd($request->all());
        $user = new User_detail;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return back()->with('user_created', 'Created Successfully!');
    }

    public function get()
    {
        $users = User_detail::orderBy('id', 'DESC')->get();
        return view('users', compact('users'));
    }
    public function getUserById($id)
    {
        $user = User_detail::find($id);
        return view('edit', compact('user'));
    }
    public function deleteUserById($id)
    {
        User_detail::where('id', $id)->delete();
        return back()->with('user_deleted', 'Deleted Successfully!');
    }
    public function update(Request $request)
    {
        $user = User_detail::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return back()->with('user_updated', 'User Updated Successfully!');
    }
}
