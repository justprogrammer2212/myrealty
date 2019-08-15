<!-- feature section -->
<section class="feature-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3>Популярні оголошення</h3>
            <p>Перегляньте будинки та квартири для продажу та оренди у вашому районі</p>
        </div>
        <div class="row">
            @foreach($popular as $offer_popular)
            <div class="col-lg-4 col-md-6">
                <!-- feature -->
                <div class="feature-item">
                    <div class="feature-pic set-bg" data-setbg="{{$offer_popular->getOfferImage()}}">
                        <div class="{{$offer_popular->status == \App\Models\Offer::status_Sale ? 'sale-notic' : 'rent-notic'}}">{{$offer_popular->status}}</div>
                    </div>
                    <div class="feature-text">
                        <div class="text-center feature-title">
                            <h5>1963 S Crescent Heights Blvd</h5>
                            <p><i class="fa fa-map-marker"></i> Los Angeles, CA 90034</p>
                        </div>
                        <div class="room-info-warp">
                            <div class="room-info">
                                <div class="rf-left">
                                    <p><i class="fa fa-th-large"></i> 800 Square foot</p>
                                    <p><i class="fa fa-bed"></i> 10 Bedrooms</p>
                                </div>
                                <div class="rf-right">
                                    <p><i class="fa fa-car"></i> 2 Garages</p>
                                    <p><i class="fa fa-bath"></i> 6 Bathrooms</p>
                                </div>
                            </div>
                            <div class="room-info">
                                <div class="rf-left">
                                    <p><i class="fa fa-user"></i> Tony Holland</p>
                                </div>
                                <div class="rf-right">
                                    <p><i class="fa fa-clock-o"></i> 1 days ago</p>
                                </div>
                            </div>
                        </div>
                        <a  href="{{route('showOffer', $offer_popular)}}" class="room-price">View Offer</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- feature section end -->
