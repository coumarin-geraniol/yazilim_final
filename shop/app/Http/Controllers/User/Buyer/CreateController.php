<?php

namespace App\Http\Controllers\User\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Buyer;
use App\Models\User;

class CreateController extends Controller
{
    public function __invoke(User $user)
    {
        $genders = Buyer::getGenders();
        return view('user.buyer.create', ['user' => $user], compact('genders'));
    }
}
