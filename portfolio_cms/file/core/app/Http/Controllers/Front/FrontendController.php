<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Bcategory;
use App\Blog;
use App\Archive;
use App\Client;
use App\Education;
use App\Experince;
use App\Funfact;
use App\About;
use App\Portfolio;
use App\Scategory;
use App\Service;
use App\Interest;
use App\Testimonial;
use App\Knowledge;
use App\Faq;
use App\PortfolioImage;
use App\Slider;
use App\Pricing;
use App\Setting;
use App\Message;

class FrontendController extends Controller
{
    // Home Page Funtions
    public function index(){
        $educations = Education::orderBy('id', 'DESC')->get();
        $experinces = Experince::orderBy('id', 'DESC')->get();
        $scategories = Scategory::with('skills')->orderBy('id', 'DESC')->get();
        $services = Service::where('status', 1)->orderBy('id', 'DESC')->get();
        $portfolios = Portfolio::orderBy('id', 'DESC')->limit(9)->get();
        $funfacts = Funfact::orderBy('id', 'DESC')->get();
        $testimonials = Testimonial::orderBy('id', 'DESC')->limit(9)->get();
        $clients = Client::orderBy('id', 'DESC')->get();
        $knowledges = Knowledge::orderBy('id', 'DESC')->get();
        $sliders = Slider::orderBy('id', 'DESC')->get();
        
        $pricingplans = Pricing::where('status', 1)->get();
       
        $blogs = Blog::where('status', 1)->orderBy('id', 'DESC')->limit(3)->get();

        $setting = Setting::first();

        if($setting->themes == 'default'){
        return view('front.index', compact('educations', 'experinces', 'scategories', 'services', 'portfolios', 'funfacts', 'testimonials', 'blogs', 'clients', 'knowledges',  'sliders', 'pricingplans'));
        }

        if($setting->themes == 'resume'){
        return view('front.themes.cvresume.index', compact('educations', 'experinces', 'scategories', 'services', 'portfolios', 'funfacts', 'testimonials', 'blogs', 'clients', 'knowledges',  'sliders', 'pricingplans'));
        }
        
        if($setting->themes == 'portfolio'){
        return view('front.themes.portfolio.index', compact('educations', 'experinces', 'scategories', 'services', 'portfolios', 'funfacts', 'testimonials', 'blogs', 'clients', 'knowledges',  'sliders', 'pricingplans'));
        }

        if($setting->themes == 'agency'){
            return view('front.themes.agency.index', compact('educations', 'experinces', 'scategories', 'services', 'portfolios', 'funfacts', 'testimonials', 'blogs', 'clients', 'knowledges',   'sliders', 'pricingplans'));
        }

    }

   // Email Sends  Funtions
    public function sendmail(Request $request) {
        
        $request->validate([
          'name' => 'required',
          'email' => 'required|email',
          'subject' => 'required',
          'message' => 'required'
        ]);
  
        $message = new Message();

        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;

        $message->save();
  
        Session::flash('success', 'Message sent successfully!');
        return back();
  
    }

    
    // Blog Page  Funtion
    public function blogs(Request $request){
        $category = $request->category;
        $term = $request->term;
        $month = $request->month;
        $year = $request->year;
        $bcategories = Bcategory::where('status', 1)->orderBy('id', 'DESC')->get();
        $archives = Archive::orderBy('id', 'DESC')->get();

          if (!empty($month) && !empty($year)) {
              $archive = true;
            } else {
              $archive = false;
            }
        $latestblogs = Blog::where('status', 1)->orderBy('id', 'DESC')->limit(4)->get();
        $blogs = Blog::where('status', 1)
                        ->when($category, function ($query, $category) {
                            return $query->where('bcategory_id', $category);
                        })
                        ->when($term, function ($query, $term) {
                            return $query->where('title', 'like', '%'.$term.'%');
                        })
                        ->when($archive, function ($query) use ($month, $year) {
                            return $query->whereMonth('created_at', $month)->whereYear('created_at', $year);
                        })
                        ->orderBy('id', 'DESC')->paginate(6);

        return view('front.blogs', compact('blogs', 'bcategories', 'archives', 'latestblogs'));
    }

    // Blog Details  Funtion
    public function blogdetails($slug) {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $latestblogs = Blog::where('status', 1)->orderBy('id', 'DESC')->limit(4)->get();
        $bcategories = Bcategory::where('status', 1)->orderBy('id', 'DESC')->get();
        $archives = Archive::orderBy('id', 'DESC')->get();
        return view('front.blogdetails', compact('blog', 'bcategories', 'latestblogs', 'archives'));
    }

   // Portfolio  Funtions
    public function portfolios(Request $request){
        $category = $request->category;
        $term = $request->term;
        $scategories = Service::where('status', 1)->get();

        $portfolios = Portfolio::when($category, function ($query, $category) {
                                    return $query->where('service_id', $category);
                                })
                                ->orderBy('id', 'DESC')->paginate(9);

        return view('front.portfolios', compact('portfolios', 'scategories'));
    }

    //Portfolio Details
    public function portfoliodetails($slug) {
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
        $sliders = PortfolioImage::where('portfolio_id', $portfolio->id)->get();

        return view('front.portfolio-details', compact('portfolio', 'sliders'));
    }

    //Service Details
    public function servicedetails($id) {
        $services = Service::where('status', 1)->orderBy('id', 'DESC')->get();
        $service = Service::where('id', $id)->firstOrFail();
        return view('front.service-details', compact('services', 'service'));
    }

    // Contact Page
    public function contact(){
        return view('front.contact');
    }
  
    // Change Language
    public function changeLanguage($lang)
    {

        session()->put('lang', $lang);
        app()->setLocale($lang);

        return redirect()->back();
    }
}
