<?php

namespace App\Http\Controllers\User\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Buyer;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(User $user, Buyer $buyer)
    {
        if ($buyer->user_id !== $user->id) {
            abort(404);  // Hata sayfasına yönlendir
        }

        $genders = Buyer::getGenders();
        return view('user.buyer.edit', compact('buyer', 'genders'));
    }
}
