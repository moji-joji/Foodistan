<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //

    public function store($id, Request $request)
    {




        // $review = ReviewController::create([
        //     'rating' => $request->rating,
        //     'comment' => $request->comment,
        //     'user_id' => auth()->id(),
        //     'listing_id' => $id,
        // ]);


        $review = new Review();
        $review->rating = $request->rating;
        $review->content = $request->content;
        $review->user_id = auth()->id();
        $review->listing_id = $id;
        $review->save(); //


        return redirect()->back();
    }
}
