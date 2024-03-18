<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request){
        $users = User::all();
        return $users;
    }

    public function findOne(Request $request){
        $user = User::find($request->id);
        $user['address'] = $user->address;
        return response()->json($user, 200,);
    }

    public function store(Request $request){
        $data = $request->only(
                                [
                                    'name',
                                    'email',
                                    'password'
                                ]);


        $user = User::create($data);
        return response()->json($user, 200);
    }
}
