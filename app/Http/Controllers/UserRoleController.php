<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRoleController extends Controller
{
    // =============user-start=============
    public function user_index(){
        return view('administrator.user_list.index');
    }

    public function user_create(){

        return view('administrator.user_list.create');
    }

    public function user_store(Request $request){
        // $request->validate([
        //     'firstname' => 'required',
        //     'lastname' => 'required',
        //     'username' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        //     'avatar' => 'required',
        //     'role' => 'required',
        // ]);

        $user = new User;
        $user->firstname = trim($request->firstname);
        $user->lastname = trim($request->lastname);
        $user->username  = trim($request->username);
        $user->email = trim($request->email);
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }

        $user->role = trim($request->role);

        $user->status = $request->status == true ? '1' : '0';

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('file_uploads/avatar/', $fileName);
            $user->avatar = $fileName;
        }

        $user->save();
        return response()->json(['User Created Successfully!']);

    }
    //==============user-end===============
}