<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function check(Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('campaign.index');
        } else {
            return redirect()->back();
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }

}
