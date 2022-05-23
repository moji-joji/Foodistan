<?php

namespace App\Http\Controllers;


use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //

    public function index()
    {

        return view('listings.featured');
    }

    public function show($id)
    {

        return view('listings.listing-details');
    }


    // public function test()
    // {
    //     $all = Listing::all();

    //     return view('listings.test', 'all');
    // }
}
