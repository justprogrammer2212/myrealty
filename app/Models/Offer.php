<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Offer extends Model implements HasMedia
{
    use HasMediaTrait;
    const USD = '$';
    const UA = '₴';
    const status_Sale = 'FOR SALE';
    const status_Rent = 'FOR RENT';
    public static $offer_currency = [self::USD, self::UA];
    public static $sale = [self::status_Sale, self::status_Rent];
    protected $table = 'offers';
    protected $guarded = [];

    public function images() {
        return explode(',',$this->images);
    }

    public function getOfferImage() {
        return $this->getFirstMediaUrl('OfferImages') != '' ? $this->getFirstMediaUrl('OfferImages') : asset('images/default/default-house.png');
    }
}
