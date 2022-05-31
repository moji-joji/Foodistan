<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Listing;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //

    public function store($id, Request $request)
    {


        $review = new Review();
        $review->rating = $request->rating;
        $review->content = $request->content;
        $review->user_id = auth()->id();
        $review->listing_id = $id;

        $review->save();


        // update rating
        $listing = Listing::find($id);
        $listing->avg_rating = $listing->reviews()->avg('rating');
        $listing->save();

        return redirect()->back();
    }

    public function destroy($listingId, $userId)
    {
        // if same user

        $review = Review::where([
            ['listing_id', $listingId],
            ['user_id', $userId]
        ])->first();

        if ($review == null) {
            abort(404);
        }

        // update rating
        $listing = Listing::find($listingId);
        $listing->avg_rating = $listing->reviews()->avg('rating');
        $listing->save();



        if (auth()->id() == $review->user_id) {
            $review->delete();
            return redirect()->back()->with('success', 'Review deleted successfully');
        } else {
            return redirect()->back()->with('error', 'You are not authorized to delete this review');
        }

        // return redirect()->back();
    }
}
