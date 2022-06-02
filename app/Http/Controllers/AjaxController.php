<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Listing;
use Illuminate\Http\Request;

class AjaxController extends Controller
{

    function toggleLike($id)
    {



        $listingId = $id;
        $listing = Listing::find($listingId);


        $userId = auth()->id();
        $like = Like::where([
            ['listing_id', $listingId],
            ['user_id', $userId]
        ])->first();
        if ($like == null) {
            $like = new Like();
            $like->user_id = $userId;
            $like->listing_id = $listingId;
            $listing->no_of_likes = $listing->no_of_likes + 1;
            $listing->save();
            $like->save();
            return response()->json(array(
                'likeCount' => $listing->no_of_likes,
                'isLiked' => 1
            ), 200);
        } else {
            $like->delete();
            $listing->no_of_likes = $listing->no_of_likes - 1;
            $listing->save();
            return response()->json(array(
                'likeCount' => $listing->no_of_likes,
                'isLiked' => 0
            ), 200);
        }
    }
}
