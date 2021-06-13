<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use App\Client;
use App\Portfolio;
use App\Service;
use App\About;
use App\Scategory;
use App\Funfact;
use App\Setting;
use Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        $services_count = Service::all();
        $blogs_count = Blog::all();
        $clients = Client::all();
        $portfolios = Portfolio::all();
        $about = About::first();
        $scategories = Scategory::with('skills')->get();
        $funfacts = Funfact::orderBy('id', 'DESC')->get();
        $adminprofile = Auth::user();
        $setting = Setting::first();
        return view('admin.dashboard', compact('clients','setting','adminprofile' ,'portfolios', 'about', 'scategories', 'services_count', 'blogs_count', 'funfacts'));
    }
}
