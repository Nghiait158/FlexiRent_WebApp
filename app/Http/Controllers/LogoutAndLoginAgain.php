<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class LogoutAndLoginAgain extends Controller
{
    public function index(){
        Auth::logout();
        return redirect()->intended('/login');      
    }
}
