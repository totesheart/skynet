<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function resume(){
        return view('front.cvresume.index');
    }
    public function portfolio(){
        return view('front.portfolio.index');
    }
}
