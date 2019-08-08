<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Realtor;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function offers() {
        $offers = Offer::orderBy('id', 'DESC')->paginate(9);
        return view('offers.offers', compact('offers'));
    }

    public function offer_show(Offer $show) {
        return view('offers.offer', compact('show'));
    }

    public function recent_offers() {
        $recent = Offer::select('status', 'title','location','price', 'currency', 'created_at')->OrderBy('created_at', 'DESC')->take(4)->get();
        return view('index', compact('recent'));
    }

    public function popular_offers() {
        $popular = Offer::select('status', 'title','location', 'street', 'square', 'garage', 'bathroom', 'bedrooms', 'views' ,'price', 'currency')->OrderBy('views', 'DESC')->take(6)->get();
        return view('index', compact('popular'));
    }
}
