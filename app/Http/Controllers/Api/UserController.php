<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::get();
        return UserResource::collection($users);
    }
    public function show($id)
    {
        $user = User::find($id);
        return new UserResource($user);
    }
    public function store(UserRequest $request)
    {
        $user = User::create($request->all());
        return new UserResource($user);
    }
    public function update($id,UserRequest $request)
    {
        # code...
        User::where('id',$id)->update($request->all());
        return response()->json(['msg' => 'success']);
    }
}
