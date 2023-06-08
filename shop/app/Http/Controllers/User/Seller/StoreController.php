<?php

namespace App\Http\Controllers\User\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Seller\StoreRequest;
use App\Models\Seller;
use App\Models\User;

class StoreController extends Controller
{
    public function __invoke($user, StoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = $user;


        $seller = Seller::where('user_id', $user)->first();
        $seller->update($data);

        return redirect()->route('user.index');
    }
}
