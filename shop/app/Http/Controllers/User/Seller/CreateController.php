<?php

namespace App\Http\Controllers\User\Seller;

use App\Http\Controllers\Controller;
use App\Models\User;

class CreateController extends Controller
{
    public function __invoke(User $user)
    {
        return view('user.seller.create', ['user' => $user]);
    }
}
