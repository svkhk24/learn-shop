<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    //
    public function __inovke()
    {
        if(auth::check()) {
            Auth::logout();
        }
    }
}
