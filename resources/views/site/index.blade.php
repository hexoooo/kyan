@extends('site.layouts.main')
@section('content')

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->


    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <div class="deal_text">
                                    <span>Big Deal</span>
                                </div>
                                <h3>Restaurant <br> Cafe
                                </h3>
                                <h4>KIAN</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <div class="deal_text">
                                    <span>Big Deal</span>
                                </div>
                                <h3>Restaurant <br> Cafe
                                </h3>
                                <h4>KIAN</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <div class="best_burgers_area">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="cafe" role="tabpanel" aria-labelledby="cafe-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section_title text-center mb-80">
                                <span>Cafe Menu</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($items as $item)
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="{{asset('asset/restaurant/images/'.$item->photo)}}" alt="photo" height="200" width="200">
                                </div>
                                <div class="info">
                                    <h3>{{$item->name}}</h3>
                                    <p>{{$item->description}}</p>
                                    <span>{{$item->price}}</span>
                                    <a id="success" href="#" data-name="Beefy Burgers" data-price="5" class="add-to-cart boxed-btn3">Order Now</a>

                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="iteam_links">
                                <a class="boxed-btn5" href={{route('menu')}}>More Items</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- Modal -->
    
    @endsection