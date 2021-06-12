<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pricing;
use Session;

class PricingController extends Controller
{
    public function pricing(){
        $pricingplans = Pricing::all();

        return view('admin.pricing.index', compact('pricingplans'));
    }

    public function add(){
        return view('admin.pricing.create');
    }

    public function edit($id){
        $pricingplan = Pricing::findOrFail($id);
        return view('admin.pricing.edit', compact('pricingplan'));
    }

    public function store(Request $request){

        $request->validate([
            'status' => 'required',
            'currency' => 'required',
            'price' => 'required',
            'plan_name' => 'required',
            'content' => 'required',
        ]);


        $plan = new Pricing();

        $plan->currency = $request->currency;
        $plan->price = $request->price;
        $plan->plan_name = $request->plan_name;
        $plan->status = $request->status;

        $plan->content = $request->content;
        $plan->save();

        Session::flash('success', 'Pricing plan saved successfully!');
        return redirect()->route('admin.pricing');

    }

    public function update(Request $request, $id){

        $request->validate([
            'status' => 'required',
            'currency' => 'required',
            'price' => 'required',
            'plan_name' => 'required',
            'content' => 'required',
        ]);

        $plan = Pricing::findOrFail($id);

        $plan->currency = $request->currency;
        $plan->price = $request->price;
        $plan->plan_name = $request->plan_name;
        $plan->status = $request->status;

        $plan->content = $request->content;
        $plan->save();

        Session::flash('success', 'Pricing plan update successfully!');
        return redirect()->route('admin.pricing');

    }

    public function delete($id){

        $plan = Pricing::find($id);
        $plan->delete();

        Session::flash('success', 'Pricing plan Deleted successfully!');
        return redirect()->route('admin.pricing');
    }
}
