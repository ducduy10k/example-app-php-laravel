<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index () {
        // dd(request('tag'));
        $listings = Listing::latest()->filter(request(['name', 'description', 'search']))->paginate(2);
        // dd($listings);
        return view('listings.index',[
            "listData" => $listings
        ]);
    }

    public function show($id) {
        $listing = Listing::find($id);
        if($listing){
            return view('listings.show', [
                'data'=> $listing
            ]);
        }else{
            abort('404');
        }
    }

    public function create(){
        return view('listings.create');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'name'=> 'required',
            'description'=> 'required',
        ]);
        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $formFields['user_id']= auth()->user()->id;
        Listing::create($formFields);

        // Session::flash('message', 'Listing created');

        return redirect('/')->with('message', 'Listing created successfully!');

    }

       // Update Listing Data
       public function update(Request $request, Listing $listing) {
        // Make sure logged in user is owner
        if($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Listing updated successfully!');
    }

    public function manage() {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}
