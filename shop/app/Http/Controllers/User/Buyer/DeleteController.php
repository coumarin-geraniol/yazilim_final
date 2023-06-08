<?php

namespace App\Http\Controllers\User\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Buyer;
use App\Models\User;

class DeleteController extends Controller
{
    public function __invoke(User $user, Buyer $buyer)
    {

        $buyer->delete();
        $user->delete();

        return redirect()->route('user.index');
    }
}
