<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Portfolio;
use App\PortfolioImage;
use App\Service;
use Session;

class PortfolioController extends Controller
{
    public function portfolio(){
        $count = Portfolio::count();
        $portfolios = Portfolio::orderBy('id', 'DESC')->get();
        return view('admin.portfolios.index', compact('portfolios', 'count'));
    }

    //Add Portfolio
    public function add(){
        $services = Service::where('status', 1)->get();
        return view('admin.portfolios.add', compact('services'));
    }

    // Store Portfolio
    public function store(Request $request){


        $slug = Str::slug($request->title, '-');
        $portfolios = Portfolio::select('slug')->get();

        $request->validate([
            'title' => [
                'required',
                'max:225',
                function($attribute, $value, $fail) use ($slug, $portfolios){
                    foreach($portfolios as $portfolio){
                        if($portfolio->slug == $slug){
                            return $fail('Title already taken!');
                        }
                    }
                }
            ],

            'image[]' => 'reqired|mimes:jpeg,jpg,png',
            'featured_image' => 'required|mimes:jpeg,jpg,png',
            'client_name' => 'required|max:300',
            'service_id' => 'required',
            'start_date' => 'required',
            'submission_date' => 'required',
            'status' => 'required',
            'content' => 'required',
        ]);

         $portfolio = new Portfolio();

        if($request->hasFile('featured_image')){

            $file = $request->file('featured_image');
            $extension = $file->getClientOriginalExtension();
            $featured_image = 'portfolio_'.time().rand().'.'.$extension;
            $file->move('assets/front/img/', $featured_image);

            $portfolio->featured_image = $featured_image;
        }

        $portfolio->title = $request->title;
        $portfolio->client_name = $request->client_name;
        $portfolio->service_id = $request->service_id;
        $portfolio->start_date = $request->start_date;
        $portfolio->submission_date = $request->submission_date;
        $portfolio->status = $request->status;
        $portfolio->slug = "sdf";
        $portfolio->content = $request->content;
        $portfolio->save();

        $projectid = Portfolio::orderBy('id', 'DESC')->first();

        if($request->hasFile('image')){
            $files = $request->file('image');
            $count = 1;
            foreach ($files as $file){
                    $extension = $file->getClientOriginalExtension();
                    $image = 'portfolio_'.$count.time().rand().'.'.$extension;
                    $file->move('assets/front/img/', $image);
                    $portfolio_slider = new PortfolioImage();
                    $portfolio_slider->image = $image;
                    $portfolio_slider->portfolio_id = $projectid->id;
                    $portfolio_slider->save();
                    $count++;
            }
        }

        Session::flash('success', 'Portfolio Added successfully!');
        return redirect()->route('admin.portfolio');
    }

    // Portfolio Delete
    public function delete($id){

        $sliders = PortfolioImage::where('portfolio_id', $id)->get();

        foreach ($sliders as $slider){
            unlink('assets/front/img/'. $slider->image);
            $slider->delete();
        }

        $portfolio = Portfolio::find($id);
        @unlink('assets/front/img/'. $portfolio->featured_image);
        $portfolio->delete();

        Session::flash('success', 'Portfolio Deleted successfully!');
        return redirect()->route('admin.portfolio');
    }

    //Portfolio Edit
    public function edit($id){

        $portfolio = Portfolio::find($id);
        $categories = Service::where('status', 1)->get();
        $portfolio_category = Service::find($portfolio->service_id);
        $sliders = PortfolioImage::where('portfolio_id', $id)->get();

        return view('admin.portfolios.edit', compact('portfolio', 'categories', 'portfolio_category', 'sliders'));

    }

    // Update Portfolio
    public function update(Request $request, $id){

        $sliders = $request->sliders;
        if($sliders != null){
            $files = $request->sliders;
            // $count = 1;
             foreach ($files as $file){
                     $slider = PortfolioImage::where('id',  $file)->first();
                     unlink('assets/front/img/'. $slider->image);
                     $slider->delete();
             }
        }


        $slug = Str::slug($request->title, '-');
        $portfolios = Portfolio::select('slug')->get();
        $portfolio = Portfolio::findOrFail($request->id);

        $request->validate([
            'title' => [
                'required',
                'max:225',
                function($attribute, $value, $fail) use ($slug, $portfolios, $portfolio){
                    foreach($portfolios as $port){
                        if($portfolio->slug != $slug){
                            if($port->slug == $slug){
                                return $fail('Title already taken!');
                            }
                        }
                    }
                }
            ],
            'client_name' => 'required|max:300',
            'service_id' => 'required',
            'start_date' => 'required',
            'submission_date' => 'required',
            'status' => 'required',
            'content' => 'required',
        ]);


        if($request->hasFile('featured_image')){

            @unlink('assets/front/img/'. $portfolio->featured_image);

            $file = $request->file('featured_image');
            $extension = $file->getClientOriginalExtension();
            $featured_image = 'portfolio_'.time().rand().'.'.$extension;
            $file->move('assets/front/img/', $featured_image);

            $portfolio->featured_image = $featured_image;

        }

        $portfolio->title = $request->title;
        $portfolio->client_name = $request->client_name;
        $portfolio->service_id = $request->service_id;
        $portfolio->start_date = $request->start_date;
        $portfolio->submission_date = $request->submission_date;
        $portfolio->status = $request->status;
        $portfolio->slug = $slug;
        $portfolio->content = $request->content;
        $portfolio->save();


        if($request->hasFile('image')){
            $filesupdates = $request->file('image');

            $count = 1;
            foreach ($filesupdates as $filesupdate){

                    $extension = $filesupdate->getClientOriginalExtension();
                    $image = 'portfolio_'.$count.time().rand().'.'.$extension;
                    $filesupdate->move('assets/front/img/', $image);

                    $portfolio_slider = new PortfolioImage();
                    $portfolio_slider->image = $image;
                    $portfolio_slider->portfolio_id = $id;
                    $portfolio_slider->save();
                    $count++;
            }
        }


        Session::flash('success', 'Portfolio Updated successfully!');
        return redirect()->route('admin.portfolio');

    }

}
