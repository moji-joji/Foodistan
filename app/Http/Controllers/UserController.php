<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Like;
use App\Models\User;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;




class UserController extends Controller
{
    //

    public function create()
    {
        return view('users.register');
    }

    // Create New User
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            // 'email' => ['required', 'email', Rule::unique('users', 'email')],
            'email' => ['required', 'email'],

            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect('/');
    }


    public function login()
    {
        return view('users.login');
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // attempt to login
        if (auth()->attempt($credentials)) {
            $request->session()->regenerateToken();

            return redirect('/')->with('message', 'You are logged in');
        }

        return redirect('/login')->with('message', 'Invalid credentials');
    }

    public function profile()
    {
        // get liked listings
        // $likedListings = Like::where('user_id', '=', auth()->id())->get();

        // $reviews = DB::table('reviews')->join('users', 'reviews.user_id', '=', 'users.id')->where('listing_id', '=', $id)->get();

        $likedListings = DB::table('likes')->join('listings', 'likes.listing_id', '=', 'listings.id')->where('user_id', '=', auth()->id())->get();



        // get blogs
        $blogs = Blog::where('user_id', '=', auth()->id())->get();

        // get reviews
        // $reviewedListings = Review::where('user_id', '=', auth()->id())->get();

        $reviewedListings = DB::table('reviews')->join('listings', 'reviews.listing_id', '=', 'listings.id')->where('user_id', '=', auth()->id())->get();

        if ($reviewedListings == null) {
            $reviewedListings = "No reviews yet";
        }
        if ($blogs == null) {
            $blogs = "No blogs yet";
        }
        if ($likedListings == null) {
            $likedListings = "No liked listings yet";
        }

        return view('users.profile', compact('likedListings', 'blogs', 'reviewedListings'));
    }
}
