<!-- Properties section -->
<section class="properties-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3>Останні оголошення</h3>
            <p>Отримайте інформацію про свіжі оголошення щодо нерухомості</p>
        </div>
        <div class="row">
            @foreach($recent as $offer)
            <div class="col-md-6">
                <div class="propertie-item set-bg" data-setbg="images/propertie/1.jpg">
                    <div class="rent-notic">{{$offer->status}}</div>
                    <div class="propertie-info text-white">
                        <div class="info-warp">
                            <h5>{{$offer->title}}</h5>
                            <p><i class="fa fa-map-marker"></i>{{$offer->location}}</p>
                        </div>
                        <div class="price">{{$offer->price}} {{$offer->currency}}</div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
    </div>
</section>
<!-- Properties section end -->
