<?php

namespace App\Http\Controllers;


use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //

    public function index()
    {
        // get featured listings

        $listings = Listing::where('featured', '=', 'yes')->get();
        return view('listings.featured', compact('listings'));
    }

    public function show($id)
    {
        // get listing by id
        $listing = Listing::find($id);
        if ($listing == null) {
            abort(404);
        }

        return view('listings.listing-details', compact('listing'));
    }



    public function search(Request $request)
    {
        // get matching listings

        $listings = Listing::where('description', 'like', '%' . strtolower($request->q) . '%')->get();
      

        return view('listings.featured', compact('listings'));
    }
}
