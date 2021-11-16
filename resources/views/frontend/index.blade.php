@extends('frontend.layouts.master')
@section('title','CoolPad || HOME PAGE')
@section('main-content')
<!-- Slider Area -->
@if(count($banners)>0)
<section id="Gslider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($banners as $key=>$banner)
        <li data-target="#Gslider" data-slide-to="{{$key}}" class="{{(($key==0)? 'active' : '')}}"></li>
        @endforeach
    </ol>
    <div class="carousel-inner" role="listbox">
        @foreach($banners as $key=>$banner)
        <div class="carousel-item {{(($key==0)? 'active' : '')}}">
            <img class="first-slide" src="{{asset($banner->photo)}}" alt="First slide">
            <div class="carousel-caption d-md-block text-left">
                <h1 class="wow fadeInDown">{{$banner->title}}</h1>
                <div class="row">
                    <div class="col-md-6">
                        <p>{!! html_entity_decode($banner->description) !!}</p>
                    </div>
                </div>
                @if ($key == 0)
                <a href="{{ route('cools-index') }}" id="learn">Learn More</a>
                @elseif($key == 1)
                <a href="{{ route('n7air-index') }}" id="learn">Learn More</a>
                @elseif($key == 2)
                <a href="{{ route('n7plus-index') }}" id="learn">Learn More</a>
                @else
                <a href="#" id="learn">Learn More</a>
                @endif
            </div>
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#Gslider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#Gslider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>
@endif
<!--/ End Slider Area -->

<!-- Start Small Banner  -->
<section class="">
    <div class="container">
        <div class="row rowsm">
            @foreach ($smallbanners as $smallbanner)
            <div class="col-md-4 info-box">
                <a href="{{ route('cools-index') }}">
                    <img src="{{ asset($smallbanner->photo) }}" alt="">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Small Banner -->

{{-- Latest Products start --}}
<div class="product-area most-popular section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <span class="sec-fontline"></span>
                    <h2>Latest Products</h2>
                    <span class="sec-fontline"></span>
                </div>
            </div>
        </div>
        @php
        $latest_product = array_column($latest_products, 'photo');
        $slug = array_column($latest_products, 'slug');
        $productbanner = array_column($productbanners, 'photo');
        // print_r ($slug[3]);
        @endphp
        <div class="row">
            <div class="col-6 latest-img1">
                <a href="{{route('product-detail',$slug[0])}}">
                    <img src="{{ asset($productbanner[0]) }}" alt="Product-banner-1">
                </a>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6 latest-img2">
                                <a href="{{ route('accessories-details') }}">
                                    <img src="{{ asset($productbanner[1]) }}" alt="Product-banner-2">
                                </a>
                            </div>
                            <div class="col-6 latest-img2">
                                <a href="{{ route('accessories-details') }}">
                                    <img src="{{ asset($productbanner[2]) }}" alt="Product-banner-3">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 latest-img1">
                        <a href="{{ route('accessories-details') }}">
                            <img src="{{ asset($productbanner[3]) }}" alt="Product-banner-4">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Latest Products end --}}

<!-- Start Shop Now Area -->
<section class="shop-services section home">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-6">
                <!-- Start Single Service -->
                <div class="shop-now">
                    <p class="sub-text">High-capacity 5000mAh battery pairs with power management techniques.</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-xl-4 col-6">
                <!-- Start Single Service -->
                <div class="shop-now">
                    <a href="{{route('product-grids')}}"><button class="btn btn-secondary">Shop Now</button></a>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!-- End Shop Area -->

<!-- Start Most Popular -->
<div class="product-area most-popular section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <span class="sec-fontline"></span>
                    <h2>Featured Products</h2>
                    <span class="sec-fontline"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    @foreach($product_lists as $product)
                    @if($product->condition=='hot')
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="{{route('product-detail',$product->slug)}}">
                                @php
                                $photo=explode(',',$product->photo);
                                // dd($photo);
                                @endphp
                                <img class="default-img" src="{{asset($photo[0])}}" alt="{{$photo[0]}}">
                            </a>

                        </div>
                        <div class="product-content">
                            <div class="row">
                                <div class="col-6">
                                    <h3><a href="{{route('product-detail',$product->slug)}}"
                                            style="float: left;">{{$product->title}}</a></h3>
                                </div>
                                <div class="col-6 more-btn">
                                    <a class="btn-default" href="{{route('product-detail',$product->slug)}}">More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Single Product -->
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Most Popular Area -->

<!-- Start Video Area -->
<div class="product-area most-popular pHpmeDideo">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <span class="sec-fontline"></span>
                    <h2>VIDEOS</h2>
                    <span class="sec-fontline"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <div class="home-video home-sec">

                    <div class="sec-bd">
                        <ul class="video-list">
                            @foreach ($videos as $video)
                            <li>
                                <a class="c-wrapper full-img J_video popup" href="{{ url($video->video_url) }}">
                                    <span class="icon-play"></span>
                                    <span class="descp">{{ $video->title }}</span>
                                    <img src="{{ asset($video->image)}}" alt="Redmi Note 10 Pro">
                                </a>
                            </li>

                            @endforeach

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Video Area -->

<!-- Start testimonial Area -->
<section class="shop-services section home">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <span class="sec-fontline"></span>
                    <h2>Testimonial</h2>
                    <span class="sec-fontline"></span>
                </div>
                <div>
                    <p class="testimonial-sub">Valued Client with valuable feedback </p>
                </div>

            </div>
        </div>
        <div id="demo1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($testimonials as $key=>$testimonial)
                <div class="carousel-item {{(($key==0)? 'active' : '')}}">
                    <div class="carousel-caption1">
                        <p>{!! $testimonial->description !!}</p>
                        <img src="{{ asset($testimonial->photo) }}">
                        <div id="image-caption1">{{ $testimonial->title }}</div>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- <a class="carousel-control-prev1" href="#demo1" data-slide="prev">
                <div class="tarrow-left"><i class='fa fa-arrow-left'></i></div>
            </a> <a class="carousel-control-next1" href="#demo1" data-slide="next">
                <div class="tarrow-right"><i class='fa fa-arrow-right'></i>
            </a>
        </div> --}}
        </div>
    </div>
</section>
<!-- end testimonial Area -->

<!-- Start Latest News -->
<section class="shop-blog section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <span class="sec-fontline"></span>
                    <h2>Latest News</h2>
                    <span class="sec-fontline"></span>
                </div>
            </div>
        </div>
        @php
        $latest_news = array_column($newPosts, 'photo');
        $created_at = array_column($newPosts, 'created_at');
        $title = array_column($newPosts, 'title');
        $slug = array_column($newPosts, 'slug');
        $description = array_column($newPosts, 'description');

        // print_r ($slug[3]);
        @endphp
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-12 latest1">
                        <div class="card mb-3" style="max-width: 566px;">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="{{ asset($latest_news[0]) }}" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <p class="news-date">{{ date('d-m-Y', strtotime($created_at[0])) }}</p>
                                        <h5 class="card-title">{{ $title[0] }}</h5>
                                        <p class="card-text">{!! $description[0] !!}</p>
                                        <a href="{{route('blog.detail',$slug[0])}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 latest1">
                        <div class="card mb-3" style="max-width: 566px;">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="{{ asset($latest_news[1]) }}" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <p class="news-date">{{ date('d-m-Y', strtotime($created_at[1])) }}</p>
                                        <h5 class="card-title">{{ $title[1] }}</h5>
                                        <p class="card-text">{!! $description[1] !!}</p>
                                        <a href="{{route('blog.detail',$slug[1])}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 latest2">
                <div class="card mb-3">
                    <img src="{{ asset($latest_news[2]) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="news-date">{{ date('d-m-Y', strtotime($created_at[2])) }}</p>
                        <h5 class="card-title">{{ $title[2] }}</h5>
                        <p class="card-text">{!! $description[2] !!}</p>
                        <a href="{{route('blog.detail',$slug[2])}}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Latest News -->

@include('frontend.layouts.newsletter')

<!-- Modal -->
@if($product_lists)
@foreach($product_lists as $key=>$product)
<div class="modal fade" id="{{$product->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close"
                        aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <!-- Product Slider -->
                        <div class="product-gallery">
                            <div class="quickview-slider-active">
                                @php
                                $photo=explode(',',$product->photo);
                                // dd($photo);
                                @endphp
                                @foreach($photo as $data)
                                <div class="single-slider">
                                    <img src="{{asset($data)}}" alt="{{$data}}">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- End Product slider -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="quickview-content">
                            <h2>{{$product->title}}</h2>
                            <div class="quickview-ratting-review">
                                <div class="quickview-ratting-wrap">
                                    <div class="quickview-ratting">
                                        @php
                                        $rate=DB::table('product_reviews')->where('product_id',$product->id)->avg('rate');
                                        $rate_count=DB::table('product_reviews')->where('product_id',$product->id)->count();
                                        @endphp
                                        @for($i=1; $i<=5; $i++) @if($rate>=$i)
                                            <i class="yellow fa fa-star"></i>
                                            @else
                                            <i class="fa fa-star"></i>
                                            @endif
                                            @endfor
                                    </div>
                                    <a href="#"> ({{$rate_count}} customer review)</a>
                                </div>
                                <div class="quickview-stock">
                                    @if($product->stock >0)
                                    <span><i class="fa fa-check-circle-o"></i> {{$product->stock}} in stock</span>
                                    @else
                                    <span><i class="fa fa-times-circle-o text-danger"></i> {{$product->stock}} out
                                        stock</span>
                                    @endif
                                </div>
                            </div>
                            @php
                            $after_discount=($product->price-($product->price*$product->discount)/100);
                            @endphp
                            <h3><small><del class="text-muted">${{number_format($product->price,2)}}</del></small>
                                ${{number_format($after_discount,2)}} </h3>
                            <div class="quickview-peragraph">
                                <p>{!! html_entity_decode($product->summary) !!}</p>
                            </div>
                            @if($product->size)
                            <div class="size">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <h5 class="title">Size</h5>
                                        <select>
                                            @php
                                            $sizes=explode(',',$product->size);
                                            // dd($sizes);
                                            @endphp
                                            @foreach($sizes as $size)
                                            <option>{{$size}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <form action="{{route('single-add-to-cart')}}" method="POST" class="mt-4">
                                @csrf
                                <div class="quantity">
                                    <!-- Input Order -->
                                    <div class="input-group">
                                        <div class="button minus">
                                            <button type="button" class="btn btn-primary btn-number" disabled="disabled"
                                                data-type="minus" data-field="quant[1]">
                                                <i class="ti-minus"></i>
                                            </button>
                                        </div>
                                        <input type="hidden" name="slug" value="{{$product->slug}}">
                                        <input type="text" name="quant[1]" class="input-number" data-min="1"
                                            data-max="1000" value="1">
                                        <div class="button plus">
                                            <button type="button" class="btn btn-primary btn-number" data-type="plus"
                                                data-field="quant[1]">
                                                <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/ End Input Order -->
                                </div>
                                <div class="add-to-cart">
                                    <button type="submit" class="btn">Add to cart</button>
                                    <a href="{{route('add-to-wishlist',$product->slug)}}" class="btn min"><i
                                            class="ti-heart"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif
<!-- Modal end -->


<!--modal popup Image start-->
@foreach ($pop_images as $pop_image)
<div class="modal fade bd-example-modal-lg blackfriday-modal light-modal" id="cybermonday" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" style="background-image: url({{ asset($pop_image->image) }});">
            <div class="modal-body">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="modal-bg">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="content">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!--modal popup image end-->
@endsection

@push('styles')

<style>
    /* Banner Sliding */
    #Gslider .carousel-inner {
        background: #000000;
        color: black;
    }

    #Gslider .carousel-inner {
        height: 760px;
    }

    #Gslider .carousel-inner img {
        width: 100% !important;
        height: 760px;
    }

    #Gslider .carousel-inner .carousel-caption {
        bottom: 30%;
        margin-left: 10%;
    }

    #Gslider .carousel-inner .carousel-caption h1 {
        font-size: 46px;
        font-weight: bold;
        line-height: 100%;
        color: #ffffff;
    }

    #Gslider .carousel-inner .carousel-caption p b {
        font-size: 18px;
        color: #22262a;
        margin: 28px 0 28px 0;
    }

    #Gslider .carousel-inner .carousel-caption p {
        font-size: 18px;
        color: #515151;
        margin: 28px 0 28px 0;
    }

    #Gslider .carousel-indicators {
        bottom: 70px;
    }

    /* Popup images */
    .blackfriday-modal .modal-content {
        background-repeat: no-repeat;
        background-size: cover;
    }

    .blackfriday-modal .btn-close {
        position: absolute;
        top: 10px;
        right: 20px;
        opacity: 0.7;
        font-size: 22px;
        color: white;
        background: none;
        border: none;
    }

    .blackfriday-modal .modal-body .modal-bg {
        padding: 30px 20px;
    }

    .modal-dialog .modal-content .modal-body {
        padding: 0px 16px;
        overflow-y: clip;
        max-height: 400px;
        height: 643px;
    }

    .modal-dialog {
        margin: 12% auto 8%;
        max-width: 760px;
        width: 1358px;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
    /*==================================================================
    [ Isotope ]*/
    var $topeContainer = $('.isotope-grid');
    var $filter = $('.filter-tope-group');

    // filter items on button click
    $filter.each(function () {
        $filter.on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            $topeContainer.isotope({ filter: filterValue });
        });

    });

    // init Isotope
    $(window).on('load', function () {
        var $grid = $topeContainer.each(function () {
            $(this).isotope({
                itemSelector: '.isotope-item',
                layoutMode: 'fitRows',
                percentPosition: true,
                animationEngine: 'best-available',
                masonry: {
                    columnWidth: '.isotope-item'
                }
            });
        });
    });

    var isotopeButton = $('.filter-tope-group button');

    $(isotopeButton).each(function () {
        $(this).on('click', function () {
            for (var i = 0; i < isotopeButton.length; i++) {
                $(isotopeButton[i]).removeClass('how-active1');
            }

            $(this).addClass('how-active1');
        });
    });
</script>
<script>
    function cancelFullScreen(el) {
        var requestMethod = el.cancelFullScreen || el.webkitCancelFullScreen || el.mozCancelFullScreen || el.exitFullscreen;
        if (requestMethod) { // cancel full screen.
            requestMethod.call(el);
        } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
            var wscript = new ActiveXObject("WScript.Shell");
            if (wscript !== null) {
                wscript.SendKeys("{F11}");
            }
        }
    }

    function requestFullScreen(el) {
        // Supports most browsers and their versions.
        var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen || el.msRequestFullscreen;

        if (requestMethod) { // Native full screen.
            requestMethod.call(el);
        } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
            var wscript = new ActiveXObject("WScript.Shell");
            if (wscript !== null) {
                wscript.SendKeys("{F11}");
            }
        }
        return false
    }
</script>

{{-- mouse hover auto play slider --}}
<script>
    $(document).ready(function(){
      $('#Gslider').on('mouseover',function(e){
        owl.trigger('play.owl.autoplay');
    });

});
</script>

{{-- Popup image --}}
<script>
    $(window).on('load', function () {
            setTimeout(function () {
                $('#cybermonday').modal('show');
            }, 2500);
        });
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }
        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
</script>
@endpush