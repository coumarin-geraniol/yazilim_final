<?php

namespace App\Http\Controllers\User\Seller;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use App\Models\User;

class DeleteController extends Controller
{
    public function __invoke(User $user, Seller $seller)
    {

        $seller->delete();
        $user->delete();

        return redirect()->route('user.index');
    }
}
