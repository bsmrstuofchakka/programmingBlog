<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class logoutController extends Controller
{
    public function displayLogout(){

        Auth::logout();
        return redirect(url('/'));

    }
}
