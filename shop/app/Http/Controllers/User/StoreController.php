<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $user = User::firstOrCreate($data);

        if ($data['role'] == 1) {
            return redirect()->route('user.buyer.create', ['user' => $user->id]);
        }
        if ($data['role'] == 2) {
            return redirect()->route('user.seller.create', ['user' => $user->id]);
        }
    }
}
