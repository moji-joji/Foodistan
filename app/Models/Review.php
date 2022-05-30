<?php

namespace App\Models;

use App\Models\Listing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{


    protected $fillable = [
        'rating',
        'content',
        'user_id',
        'listing_id',
    ];

    public function listing()
    {
        // by default foreign key is listing_id
        return $this->belongsTo(Listing::class);
    }


    public function user()
    {
        // by default foreign key is user_id
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
