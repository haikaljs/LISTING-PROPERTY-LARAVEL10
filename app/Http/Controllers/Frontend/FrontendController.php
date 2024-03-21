<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hero;

class FrontendController extends Controller
{
    function index() : View{
        $hero = Hero::first();
        return view('frontend.home.index', compact('hero'));
    }
}
