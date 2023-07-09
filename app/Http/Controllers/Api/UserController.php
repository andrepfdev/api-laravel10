<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateUser;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return UserResource::collection($users);
    }

    public function store(StoreUpdateUser $request)
    {
        $data = $request->validated();
        $data["password"] = bcrypt($request->password);

        $user = User::create($data);

        return new UserResource($user);

    }

    public function show(string $id)
    {
        $user = User::findOrFail($id);

        return new UserResource($user);
    }

    public function update(StoreUpdateUser $request, string $id)
    {
        $data = $request->all();

        if($request->getPassword())
            $data['password'] = bcrypt($request->getPassword());

        $user = User::findOrFail($id);

        $user->update($data);

        return new UserResource($user);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([], Response::HTTP_NO_CONTENT);

    }

}
