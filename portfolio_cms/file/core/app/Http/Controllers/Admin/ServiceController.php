<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Portfolio;
use App\PortfolioImage;
use Illuminate\Http\Request;
use App\Service;
use Session;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function service(){
        $services = Service::orderBy('id', 'DESC')->get();
        return view('admin.service.index', compact('services'));
    }

    //Add Service
    public function add(){
        return view('admin.service.add');
    }

    // Store Service
    public function store(Request $request){

        $slug = Str::slug($request->title, '-');
        $services = Service::select('slug')->get();


        $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png',
            'featured_image' => 'mimes:jpeg,jpg,png',
            'title' => [
                'required',
                'max:255',
                function($attribute, $value, $fail) use ($slug, $services) {
                  foreach($services as $service) {
                    if ($service->slug == $slug) {
                      return $fail('Title already taken!');
                    }
                  }
                }
              ],
            'description' => 'required|max:300',
            'status' => 'required',
            'content' => 'required',
        ]);

        $service = new Service();

        if($request->hasFile('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $image);

            $service->image = $image;
        }
        if($request->hasFile('featured_image')){

            $file = $request->file('featured_image');
            $extension = $file->getClientOriginalExtension();
            $featured_image = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $featured_image);

            $service->featured_image = $featured_image;
        }

        $service->title = $request->title;
        $service->slug = $slug;
        $service->description = $request->description;
        $service->status = $request->status;
        $service->content = $request->content;
        $service->save();


        Session::flash('success', 'Service Added successfully!');
        return redirect()->route('admin.service');
    }

    //Service Delete
    public function delete($id){


        $service = Service::find($id);

        $portfolios = Portfolio::where('service_id', $id)->get();

        foreach($portfolios as $portfolio){

          $id = $portfolio->id;

          $images = PortfolioImage::where('portfolio_id', $id)->get();

          foreach($images as $image){
            @unlink('assets/front/img/'. $image->image);
            $image->delete();
          }

          @unlink('assets/front/img/'. $portfolio->featured_image);
          $portfolio->delete();
        }

        @unlink('assets/front/img/'. $service->image);
        $service->delete();

        Session::flash('success', 'Service Deleted successfully!');
        return redirect()->route('admin.service');
    }

    //Service Edit
    public function edit($id){

        $service = Service::find($id);
        return view('admin.service.edit', compact('service'));

    }

    // Service Update
    public function update(Request $request, $id){


        $slug = Str::slug($request->title, '-');
        $services = Service::select('slug')->get();
        $service = Service::findOrFail($id);

        $request->validate([
            'image' => 'mimes:jpeg,jpg,png',
            'featured_image' => 'mimes:jpeg,jpg,png',
            'title' => [
                'required',
                'max:255',
                function($attribute, $value, $fail) use ($slug, $services, $service) {
                  foreach($services as $serv) {
                    if ($service->slug != $slug) {
                      if ($serv->slug == $slug) {
                        return $fail('Title already taken!');
                      }
                    }
                  }
                }
              ],
            'description' => 'required|max:300',
            'status' => 'required',
            'content' => 'required',
        ]);

        $service = Service::find($id);
        if($request->hasFile('image')){
            @unlink('assets/front/img/'. $service->image);

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $image);

            $service->image = $image;
        }

        if($request->hasFile('featured_image')){
          @unlink('assets/front/img/'. $service->featured_image);

          $file = $request->file('featured_image');
          $extension = $file->getClientOriginalExtension();
          $featured_image = time().rand().'.'.$extension;
          $file->move('assets/front/img/', $featured_image);

          $service->featured_image = $featured_image;
      }

        $service->title = $request->title;
        $service->slug = $slug;
        $service->description = $request->description;
        $service->status = $request->status;
        $service->content = $request->content;
        $service->save();

        Session::flash('success', 'Service Updated successfully!');
        return redirect()->route('admin.service');

    }
}
