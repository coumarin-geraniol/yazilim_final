<?php

namespace App\Http\Controllers\User\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Seller\UpdateRequest;
use App\Models\Seller;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user, Seller $seller)
    {
        $data = $request->validated();

        $sellerData = [
            'name' => $data['name'],
            'delivery_info' => $data['delivery_info'],
            'phone' => $data['phone'],
            'address' => $data['address']
        ];
        $userData = [
            'email' => $data['email']
        ];

        $user->update($userData);
        $seller->update($sellerData);

        return redirect()->route('user.seller.show', ['user' => $seller->user->id, 'seller' => $seller->id]);
    }
}
