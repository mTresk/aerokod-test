<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    public function index()
    {
        return UserResource::collection(Cache::rememberForever('users', function () {
            return User::all();
        }));
    }

    public function store(UserStoreRequest $request)
    {
        return User::create($request->validated());
    }

    public function show(User $user)
    {
        return UserResource::make($user);

    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $user->update($request->validated());

        return UserResource::make($user);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response()->json(['message' => 'Пользователь удален']);
    }
}
