<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class CreateController extends Controller
{
    public function __invoke()
    {
        $roles = User::getRoles();
        return view('user.create', compact('roles'));
    }
}
