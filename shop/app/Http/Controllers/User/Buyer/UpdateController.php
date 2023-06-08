<?php

namespace App\Http\Controllers\User\Buyer;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Buyer\UpdateRequest;
use App\Models\Buyer;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user, Buyer $buyer)
    {
        $data = $request->validated();

        $buyerData = [
            'name' => $data['name'],
            'surname' => $data['surname'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'gender' => $data['gender']
        ];
        $userData = [
            'email' => $data['email']
        ];

        $user->update($userData);
        $buyer->update($buyerData);

        return redirect()->route('user.buyer.show', ['user' => $buyer->user->id, 'buyer' => $buyer->id]);
    }
}
