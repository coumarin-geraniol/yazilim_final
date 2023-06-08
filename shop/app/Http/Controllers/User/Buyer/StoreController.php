<?php

namespace App\Http\Controllers\User\Buyer;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Buyer\StoreRequest;
use App\Models\Buyer;

class StoreController extends Controller
{
    public function __invoke($user, StoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = $user;

        $buyer = Buyer::where('user_id', $user)->first();
        $buyer->update($data);

        return redirect()->route('user.index');
    }
}
