<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index () {
        // dd(request('tag'));
        $listings = Listing::latest()->filter(request(['name', 'description', 'search']))->get();
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

        Listing::create($formFields);

        // Session::flash('message', 'Listing created');

        return redirect('/')->with('message', 'Listing created successfully!');
        
    }
}
