<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\User\UpdateRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function show($id)
    {
        $user=User::find($id);
        //dd($user);

        return view('users.show',['user'=>$user]);
    }

    public function edit(){
        //dd(Auth::User());
        $user=Auth::user();
        return view('users.edit',['user'=>$user]);
    }

    public function update(UpdateRequest $request)
    {
         $user=Auth::user();
         $user->fill($request->all());
         $user->save();
         return redirect()->back()->with(['message' => '更新しました！']);
    }

    
    
}
