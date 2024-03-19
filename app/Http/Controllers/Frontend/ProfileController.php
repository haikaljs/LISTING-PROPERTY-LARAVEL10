<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ProfileController extends Controller
{
    function index() : View{
        return view('frontend.dashboard.profile.index');
    }

    function update(ProfileUpdateRequest $request) : RedirectResponse{
        dd($request->all());
        return redirect()->back();
    }
}
