<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate ([
            'login' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($validated)) {
            return redirect('user');
        }
        return redirect('login');
    }
}
