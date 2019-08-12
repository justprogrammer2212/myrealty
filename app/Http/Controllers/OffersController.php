<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OffersController extends Controller
{
    public function offers() {
        $offers = Offer::orderBy('id', 'DESC')->paginate(9);
        return view('offers.offers', compact('offers'));
    }

    public function offer_show(Offer $show) {
        return view('offers.offer', compact('show'));
    }


    public function homePage_offers() {
        $recent = Offer::select('status', 'title','location','price', 'currency', 'created_at')->OrderBy('created_at', 'DESC')->take(4)->get();
        $popular = Offer::select('status', 'title','location', 'street', 'square', 'garage', 'bathroom', 'bedrooms', 'views' ,'price', 'currency')->OrderBy('views', 'DESC')->take(6)->get();
        $categories = Category::get();
        return view('index', compact('recent','popular', 'categories'));
    }

//    public function user_offers() {
//        $user_offer = DB::table('offers')->join('users','user_id','=','id')->where('user_id', '==','id')->get();
//        return view('user.profile',['user_offer' => $user_offer]);
//    }
}
