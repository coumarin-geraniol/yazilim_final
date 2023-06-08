<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Buyer;
use App\Models\Seller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        $sellers = Seller::all();
        $buyers = Buyer::all();
        return view('user.index', compact('users', 'sellers', 'buyers'));
    }
}
