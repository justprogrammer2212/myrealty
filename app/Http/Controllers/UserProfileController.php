<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function user()
    {
        $userOffers = auth()->user()->offers()->get();
        $userOffers =array_reverse($userOffers->toArray());
        return view('user.profile', compact('userOffers'));
    }

    public function userAdd() {
        $categories = Category::get();
        return view('user.profile-add', compact('categories'));
    }
}
