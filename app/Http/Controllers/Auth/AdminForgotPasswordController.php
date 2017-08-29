<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;

class AdminForgotPasswordController extends Controller
{

    use SendsPasswordResetEmails;



    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    protected function broker()
    {
        return Password::broker('admins');

    }

    public function showLinkRequestForm()
    {
        return view('auth.passwords.email-admin');
    }

}
