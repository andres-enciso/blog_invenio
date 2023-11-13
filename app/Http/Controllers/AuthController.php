<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\Session;
use Illuminate\Session\Store;
use Symfony\Component\Routing\Annotation\Route;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $var = $request->validate([
            'user' => 'required',
            //'password' => 'required',
        ]);

        if ($var) {
            session([
                'user'            => $request->input('user'),
            ]);

            return redirect()->route('index');        }
    }
}
