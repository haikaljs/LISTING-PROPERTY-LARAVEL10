<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AdminAuthController extends Controller
{
    function login() : View
    {
        return view('admin.auth.login');
    }

    function passwordRequest() : View
    {
        return view('admin.auth.forgot-password');
    }
}
