<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\User\RegisterRequest;
use App\Http\Resources\User\RegisterResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use function App\Http\Controllers\API\Item\app;

class RegisterController extends Controller
{
    public function __invoke(RegisterRequest $request)
    {

        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $user = User::firstOrCreate($data);

        return new RegisterResource($user);
    }
}
