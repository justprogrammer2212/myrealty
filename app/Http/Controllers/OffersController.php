<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Offer;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function offers() {
        $offers = Offer::orderBy('id', 'DESC')->paginate(9);
        return view('offers.offers', compact('offers'));
    }

    public function offer_show(Offer $show) {
        $show->views++;
        $show->save();
        return view('offers.offer', compact('show'));
    }

    public function homePage_offers() {
        $recent = Offer::OrderBy('created_at', 'DESC')->take(4)->get();
        $popular = Offer::OrderBy('views', 'DESC')->take(6)->get();
        $categories = Category::get();
        return view('index', compact('recent','popular', 'categories'));
    }

    public function addOffer(Request $request) {
//        $status = false;
//        $file = $request->file('file');
//        if ($request->isMethod('post')) {
////            Перевірка чи прийходить постом
//            if ($request->hasFile('file')) {
////                Перевірка наявності файлу
//                $path = 'app/public/images_offers';
////                Збереження файла
//                $file->move(storage_path($path), $file->getClientOriginalName());
////                Статус для збереження зображення в БД
//                $status = true;
//            }
//        }

        $offer = Offer::create([
            'title' => $request->input('title'),
            'price' => $request->input('price'),
            'currency' => $request->input('currency'),
            'status' => $request->input('status'),
            'location'=> $request->input('location'),
            'street' => $request->input('street'),
            'square' => $request->input('square'),
            'garage' => $request->input('garage'),
            'bathroom' => $request->input('bathroom'),
            'bedrooms' => $request->input('bedroom'),
            'age_build' => $request->input('age'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category'),
            'user_id' => $request->input('user-id'),
        ]);

        $offer->addMedia($request->file)->toMediaCollection('OfferImages');
//        if ($status) {
//            $offer->images = $file->getClientOriginalName();
//            $offer->save();
//        }
        return redirect()->route('user_profile');
    }
}
