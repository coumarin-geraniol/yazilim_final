<?php

namespace App\Http\Controllers\User\Seller;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(User $user, Seller $seller)
    {
        if ($seller->user_id !== $user->id) {
            abort(404);  // Hata sayfasına yönlendir
        }

        return view('user.seller.edit', compact('seller'));
    }
}
