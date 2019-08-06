@extends('layouts.main')
@section('content')
    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="images/page-top-bg.jpg">
        <div class="container text-white">
            <h2>Оголошення</h2>
        </div>
    </section>
    <!--  Page top end -->

    <!-- Breadcrumb -->
    <div class="site-breadcrumb">
        <div class="container">
            <a href="{{route('indexPage')}}"><i class="fa fa-home"></i>Головна</a>
            <span><i class="fa fa-angle-right"></i>Оголошення</span>
        </div>
    </div>


    <!-- page -->
    <section class="page-section categories-page">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <!-- feature -->
                    <div class="feature-item">
                        <div class="feature-pic set-bg" data-setbg="images/feature/6.jpg">
                            <div class="sale-notic">FOR SALE</div>
                        </div>
                        <div class="feature-text">
                            <div class="text-center feature-title">
                                <h5>1203 Orren Street, Northeast</h5>
                                <p><i class="fa fa-map-marker"></i> Washington, DC 20002</p>
                            </div>
                            <div class="room-info-warp">
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-th-large"></i> 700 Square foot</p>
                                        <p><i class="fa fa-bed"></i> 7 Bedrooms</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-car"></i> 1 Garages</p>
                                        <p><i class="fa fa-bath"></i> 7 Bathrooms</p>
                                    </div>
                                </div>
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-user"></i> Sasha Gordon </p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-clock-o"></i> 8 days ago</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="room-price">$1,600,000</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- feature -->
                    <div class="feature-item">
                        <div class="feature-pic set-bg" data-setbg="images/feature/7.jpg">
                            <div class="sale-notic">FOR SALE</div>
                        </div>
                        <div class="feature-text">
                            <div class="text-center feature-title">
                                <h5>1476 Harvard St NW Unit Ph</h5>
                                <p><i class="fa fa-map-marker"></i> Washington, DC 20009</p>
                            </div>
                            <div class="room-info-warp">
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-th-large"></i> 550 Square foot</p>
                                        <p><i class="fa fa-bed"></i> 7 Bedrooms</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-car"></i> 1 Garages</p>
                                        <p><i class="fa fa-bath"></i> 3 Bathrooms</p>
                                    </div>
                                </div>
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-user"></i> Adam Johnson</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-clock-o"></i> 1 days ago</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="room-price">$1,250,000</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- feature -->
                    <div class="feature-item">
                        <div class="feature-pic set-bg" data-setbg="images/feature/8.jpg">
                            <div class="sale-notic">FOR SALE</div>
                        </div>
                        <div class="feature-text">
                            <div class="text-center feature-title">
                                <h5>9633 Weathered Oak Ct</h5>
                                <p><i class="fa fa-map-marker"></i> Bethesda, MD 208179</p>
                            </div>
                            <div class="room-info-warp">
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-th-large"></i> 1000 Square foot</p>
                                        <p><i class="fa fa-bed"></i> 6 Bedrooms</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-car"></i> 2 Garages</p>
                                        <p><i class="fa fa-bath"></i> 8 Bathrooms</p>
                                    </div>
                                </div>
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-user"></i> Ann Hathaway</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-clock-o"></i> 1 days ago</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="room-price">$1,230,000</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- feature -->
                    <div class="feature-item">
                        <div class="feature-pic set-bg" data-setbg="images/feature/9.jpg">
                            <div class="rent-notic">FOR Rent</div>
                        </div>
                        <div class="feature-text">
                            <div class="text-center feature-title">
                                <h5>2529 Marsh Hill Henry Rd Unit Mc</h5>
                                <p><i class="fa fa-map-marker"></i> McHenry, MD 21541</p>
                            </div>
                            <div class="room-info-warp">
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-th-large"></i> 550 Square foot</p>
                                        <p><i class="fa fa-bed"></i> 4 Bedrooms</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-car"></i> 1 Garages</p>
                                        <p><i class="fa fa-bath"></i> 2 Bathrooms</p>
                                    </div>
                                </div>
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-user"></i>  McHenry, MD 21541</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-clock-o"></i> 1 days ago</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="room-price">$1,000/month</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- feature -->
                    <div class="feature-item">
                        <div class="feature-pic set-bg" data-setbg="images/feature/10.jpg">
                            <div class="sale-notic">FOR SALE</div>
                        </div>
                        <div class="feature-text">
                            <div class="text-center feature-title">
                                <h5>6335 N Magnolia Ave Apt 1S</h5>
                                <p><i class="fa fa-map-marker"></i> Chicago, IL 60660</p>
                            </div>
                            <div class="room-info-warp">
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-th-large"></i> 2200 Square foot</p>
                                        <p><i class="fa fa-bed"></i> 16 Bedrooms</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-car"></i> 3 Garages</p>
                                        <p><i class="fa fa-bath"></i> 10 Bathrooms</p>
                                    </div>
                                </div>
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-user"></i> Tony Holland </p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-clock-o"></i> 8 days ago</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="room-price">$1,600,000</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- feature -->
                    <div class="feature-item">
                        <div class="feature-pic set-bg" data-setbg="images/feature/11.jpg">
                            <div class="rent-notic">FOR Rent</div>
                        </div>
                        <div class="feature-text">
                            <div class="text-center feature-title">
                                <h5>441 E Maywood Ct</h5>
                                <p><i class="fa fa-map-marker"></i> Decatur, IL 62526</p>
                            </div>
                            <div class="room-info-warp">
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-th-large"></i>   750 Square foot</p>
                                        <p><i class="fa fa-bed"></i> 5 Bedrooms</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-car"></i> 1 Garages</p>
                                        <p><i class="fa fa-bath"></i> 3 Bathrooms</p>
                                    </div>
                                </div>
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-user"></i> Chris Brown</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-clock-o"></i> 8 days ago</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="room-price">$1,800/month</a>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="site-pagination">--}}
{{--                <span>1</span>--}}
{{--                <a href="#">2</a>--}}
{{--                <a href="#">3</a>--}}
{{--                <a href="#"><i class="fa fa-angle-right"></i></a>--}}
{{--            </div>--}}
        </div>
    </section>
    <!-- page end -->


    @stop
