<?php

namespace App\Models;

use App\Models\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    // use HasFactory;
    protected $table = 'listings';

    protected $attributes = [
        'twitter_url' => 'https://twitter.com/?lang=en',
        'instagram_url' => 'https://www.instagram.com/',
        'website' => 'ilovefood@gmail.com',
        'email' => 'reachus@restaurant.com',
        'facebook_url' => 'https://www.facebook.com/',
        'views' => 0,
        'no_of_ratings' => 0,
        'avg_rating' => 0,
        'no_of_likes' => 0,
        'longitude' => 0,
        'latitude' => 0,







    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
