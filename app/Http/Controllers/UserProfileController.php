<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Offer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $userOffers = Offer::Where('user_id', Auth::user()->id)->OrderBy('id', 'DESC')->paginate(6);
        return view('user.profile', compact('userOffers'));
    }

    public function userAdd() {
        $categories = Category::get();
        return view('user.profile-add', compact('categories'));
    }

    public function userEdit(User $user_id) {
        $userPersonal = User::get();
        return view('user.edit-profile', compact('user_id','userPersonal'));
    }

    public function userDelete(Offer $user_id) {
        $user_id->delete();
        return redirect()->route('user_profile');
    }
}
