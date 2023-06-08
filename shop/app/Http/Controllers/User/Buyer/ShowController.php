<?php

namespace App\Http\Controllers\User\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Buyer;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(User $user, Buyer $buyer)
    {
        if ($buyer->user_id !== $user->id) {
            abort(404);  // Hata sayfasına yönlendir
        }

        return view('user.buyer.show', compact('buyer'));
    }
}
