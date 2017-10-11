<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Request $request){
        $users = User::paginate(15);
        if ($request->ajax()) {

            return view('user.partial.index', ['users' => $users])->render();

        }

        return view('user.index', ['users' => $users]);
    }
}
