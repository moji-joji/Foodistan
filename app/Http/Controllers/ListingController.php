<?php

namespace App\Http\Controllers;


use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{
    //

    public function index()
    {
        // get featured listings

        $listings = Listing::where('featured', '=', 'yes')->get();
        // get likes
        $likes = DB::table('likes')->get();

        return view('listings.featured', compact('listings'), compact('likes'));
    }



    public function show($id)
    {

        // get listing by id
        $listing = Listing::find($id);
        if ($listing == null) {
            abort(404);
        }
        // $reviews = Listing::find($id)->reviews()->get();
        $reviews = DB::table('reviews')->join('users', 'reviews.user_id', '=', 'users.id')->where('listing_id', '=', $id)->get();
        $reviews = json_decode($reviews, true);

        // get likes
        $likes = DB::table('likes')->get();
        // ubdate like count
        $listing->no_of_likes = $listing->likes()->count();
        $listing->views = $listing->views + 1;
        $listing->save();


        return view('listings.listing-details', ['listing' => $listing, 'reviews' => $reviews]);
    }



    public function search(Request $request)
    {
        // get matching listings

        $listings = Listing::where('description', 'like', '%' . strtolower($request->q) . '%')->get();


        return view('listings.featured', compact('listings'));
    }
}
