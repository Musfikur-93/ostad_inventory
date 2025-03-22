<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userRegistrationPage(){

        return view('pages.auth.registration-page');

    } // end userRegistrationPage


    public function userLoginPage(){

        return view('pages.auth.login-page');

    } // end userLoginPage


    public function userResetPasswordPage(){

        return view('pages.auth.reset-pass');

    } // end userResetPasswordPage


    public function sendOtpPage(){

        return view('pages.auth.send-otp-page');

    } // end sendOtpPage


    public function verifyOtpPage(){

        return view('pages.auth.verify-otp-page');

    } // end sendOtpPage


    public function userProfilePage(){

        return view('pages.dashboard.user-profile-page');

    } // end userProfilePage


} // end UserController
