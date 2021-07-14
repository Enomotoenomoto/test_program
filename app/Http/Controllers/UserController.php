<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
   public function test(Request $request) 
    {
        $data = User::where('id', $request->id)->first();

        return view('welcome')->with(['data' => $data]);
    }
}
