<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class profilesController extends Controller
{
    //
    public function index($user)
    {
            // try to find or fail!
        $userVar = User::findOrFail($user);


        return view('home',[
            'user' => $userVar,
        ]);
    }
}
