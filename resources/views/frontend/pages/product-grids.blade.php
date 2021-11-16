@extends('frontend.layouts.master')

@section('title','CoolPad || PRODUCT PAGE')

@section('main-content')
<!-- Breadcrumbs -->
<div class="shop-breadcrumbs ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Home &nbsp; /</a></li>
                        <li class="active"><a href="javascript:void(0);">&nbsp; Shop</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Product Style -->
<form action="{{route('shop.filter')}}" method="POST">
    @csrf
    <section id="shop-bg" class="product-area shop-sidebar shop section">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="shop-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget category">
                            <h3 class="title">Categories</h3>
                            <ul class="categor-list">
                                @php
                                // $category = new Category();
                                $menu=App\Models\Category::getAllParentWithChild();
                                @endphp
                                @if($menu)
                                <li>
                                    @foreach($menu as $cat_info)
                                    @if($cat_info->child_cat->count()>0)
                                <li><a href="{{route('product-cat',$cat_info->slug)}}">{{$cat_info->title}}</a>
                                    <ul>
                                        @foreach($cat_info->child_cat as $sub_menu)
                                        <li><a
                                                href="{{route('product-sub-cat',[$cat_info->slug,$sub_menu->slug])}}">{{$sub_menu->title}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @else
                                <li><a href="{{route('product-cat',$cat_info->slug)}}">{{$cat_info->title}}</a></li>
                                @endif
                                @endforeach
                                </li>
                                @endif

                            </ul>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Shop By Price -->
                        <div class="single-widget range">
                            <h3 class="title">Shop by Price</h3>
                            <div class="price-filter">
                                <div class="price-filter-inner">
                                    @php
                                    $max=DB::table('products')->max('price');
                                    // dd($max);
                                    @endphp
                                    <div id="slider-range" data-min="0" data-max="{{$max}}"></div>
                                    <div class="product_filter">
                                        <button type="submit" class="filter_button">Filter</button>
                                        <div class="label-input">
                                            <span>Range:</span>
                                            <input style="" type="text" id="amount" readonly />
                                            <input type="hidden" name="price_range" id="price_range"
                                                value="@if(!empty($_GET['price'])){{$_GET['price']}}@endif" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/ End Shop By Price -->

                        <!-- Single Widget -->
                        {{-- <div class=" color-sel single-widget category">
                                    <h3 class="title">Color</h3>
                                    <ul>
                                        <li class="colour-listItem"><label class="common-customCheckbox" data-count="151"><span data-colorhex="blue" class="colour-label colour-colorDisplay" style="background-color: rgb(0, 116, 217);"></span> <input  type="checkbox" value="Blue"><div class="common-checkboxIndicator"></div></label></li>                                                           
                                        <li class="colour-listItem"><label class="common-customCheckbox" data-count="109"><span data-colorhex="navy blue" class="colour-label colour-colorDisplay" style="background-color: rgb(60, 68, 119);"></span> <input type="checkbox" value="Navy Blue"><div class="common-checkboxIndicator"></div></label></li>
                                        <li class="colour-listItem"><label class="common-customCheckbox" data-count="105"><span data-colorhex="pink" class="colour-label colour-colorDisplay" style="background-color: rgb(241, 169, 196);"></span> <input type="checkbox" value="Pink"><div class="common-checkboxIndicator"></div></label></li>                                               
                                        <li class="colour-listItem"><label class="common-customCheckbox" data-count="90"><span data-colorhex="red" class="colour-label colour-colorDisplay" style="background-color: rgb(211, 75, 86);"></span> <input type="checkbox" value="Red"><div class="common-checkboxIndicator"></div></label></li>
                                    </ul>  
                                    
                                    <button type="submit" class="filter_button">Filter</button>

                                </div> --}}
                        <!--/ End Single Widget -->
                    </div>
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="col-12">
                            <!-- Shop Top -->
                            <div class="shop-top">
                                <div class="shop-shorter">

                                    <div class="single-shorter">

                                        <label>Show</label>
                                        <select class="show" name="show" onchange="this.form.submit();">
                                            <option value="">Default</option>
                                            <option value="9" @if(!empty($_GET['show']) && $_GET['show']=='9' ) selected
                                                @endif>09</option>
                                            <option value="15" @if(!empty($_GET['show']) && $_GET['show']=='15' )
                                                selected @endif>15</option>
                                            <option value="21" @if(!empty($_GET['show']) && $_GET['show']=='21' )
                                                selected @endif>21</option>
                                            <option value="30" @if(!empty($_GET['show']) && $_GET['show']=='30' )
                                                selected @endif>30</option>
                                        </select>
                                    </div>
                                    <div class="single-shorter">
                                        <label>Sort By</label>
                                        <select class='sortBy' name='sortBy' onchange="this.form.submit();">
                                            <option value="">Default</option>
                                            <option value="title" @if(!empty($_GET['sortBy']) &&
                                                $_GET['sortBy']=='title' ) selected @endif>Name</option>
                                            <option value="price" @if(!empty($_GET['sortBy']) &&
                                                $_GET['sortBy']=='price' ) selected @endif>Price</option>
                                            <option value="category" @if(!empty($_GET['sortBy']) &&
                                                $_GET['sortBy']=='category' ) selected @endif>Category</option>
                                            {{-- <option value="brand" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='brand') selected @endif>Brand</option> --}}
                                        </select>
                                    </div>
                                </div>
                                <ul class="view-mode">
                                    {{-- <li ><a href="javascript:void(0)"><i class="fa fa-th-large"></i></a></li> --}}
                                    <li class="active"><a href="{{route('product-lists')}}"><i
                                                class="fa fa-th-list"></i></a></li>
                                </ul>
                            </div>
                            <!--/ End Shop Top -->
                        </div>
                    </div>
                    <div class="row row-add-helper">
                        {{-- {{$products}} --}}
                        @if(count($products)>0)
                        @foreach($products as $product)
                        <div class="col-4">
                            <div class="row">

                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="{{route('product-detail',$product->slug)}}">
                                            @php
                                            $photo=explode(',',$product->photo);
                                            @endphp
                                            <img class=" img-h default-img" src="{{asset($photo[0])}}"
                                                alt="{{$photo[0]}}">
                                            <img class="hover-img" src="{{asset($photo[0])}}" alt="{{$photo[0]}}">
                                            @if($product->discount)
                                            <!-- <span class="price-dec">{{$product->discount}} % Off</span> -->
                                            @endif
                                        </a>
                                        <div class="button-head">
                                            <div class="product-action">
                                                <a title="Wishlist" href="{{route('add-to-wishlist',$product->slug)}}"
                                                    class="wishlist" data-id="{{$product->id}}"><i
                                                        class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a title="Add to cart"
                                                    href="{{route('add-to-cart',$product->slug)}}">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">


                                        <h3><a href="{{route('product-detail',$product->slug)}}"
                                                style="float: left;">{{$product->title}}</a></h3>

                                        <div class="price-btn">
                                            @php
                                            $after_discount=($product->price-($product->price*$product->discount)/100);
                                            @endphp
                                            <a class="btn-default" href="{{route('product-detail',$product->slug)}}">
                                                <span>৳ {{number_format($after_discount,2)}}</span></a>
                                        </div>


                                    </div>
                                </div>

                            </div>

                        </div>
                        @endforeach
                        @else
                        <h4 class="text-warning" style="margin:100px auto;">There are no products.</h4>
                        @endif

                    </div>
                    <div class="row">
                        <div class="col-md-12 justify-content-center d-flex">
                            {{$products->appends($_GET)->links()}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</form>

<!--/ End Product Style 1  -->

<!-- Modal -->
@if($products)
@foreach($products as $key=>$product)
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
                                        {{-- <i class="yellow fa fa-star"></i>
                                                        <i class="yellow fa fa-star"></i>
                                                        <i class="yellow fa fa-star"></i>
                                                        <i class="yellow fa fa-star"></i>
                                                        <i class="fa fa-star"></i> --}}
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
                                <h4>Size</h4>
                                <ul>
                                    @php
                                    $sizes=explode(',',$product->size);
                                    // dd($sizes);
                                    @endphp
                                    @foreach($sizes as $size)
                                    <li><a href="#" class="one">{{$size}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
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
                                    {{-- <div class="col-lg-6 col-12">
                                                        <h5 class="title">Color</h5>
                                                        <select>
                                                            <option selected="selected">orange</option>
                                                            <option>purple</option>
                                                            <option>black</option>
                                                            <option>pink</option>
                                                        </select>
                                                    </div> --}}
                                </div>
                            </div>
                            <form action="{{route('single-add-to-cart')}}" method="POST">
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
                            <div class="default-social">
                                <!-- ShareThis BEGIN -->
                                <div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                            </div>
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

@endsection
@push('styles')
<style>
    .pagination {
        display: inline-flex;
    }

    .filter_button {
        /* height:20px; */
        text-align: center;
        background: #3a3fb5;
        padding: 8px 16px;
        margin-top: 10px;
        color: white;
    }

    .shop-categories .main-category a {
        transition: color .4s ease;
        font-size: 15px;
        color: #757575;
        margin: 0 18px;
        cursor: default;
        font-weight: 700;
    }
</style>
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
    $(document).ready(function(){
        /*----------------------------------------------------*/
        /*  Jquery Ui slider js
        /*----------------------------------------------------*/
        if ($("#slider-range").length > 0) {
            const max_value = parseInt( $("#slider-range").data('max') ) || 500;
            const min_value = parseInt($("#slider-range").data('min')) || 0;
            const currency = $("#slider-range").data('currency') || '';
            let price_range = min_value+'-'+max_value;
            if($("#price_range").length > 0 && $("#price_range").val()){
                price_range = $("#price_range").val().trim();
            }
            
            let price = price_range.split('-');
            $("#slider-range").slider({
                range: true,
                min: min_value,
                max: max_value,
                values: price,
                slide: function (event, ui) {
                    $("#amount").val(currency + ui.values[0] + " -  "+currency+ ui.values[1]);
                    $("#price_range").val(ui.values[0] + "-" + ui.values[1]);
                }
            });
            }
        if ($("#amount").length > 0) {
            const m_currency = $("#slider-range").data('currency') || '';
            $("#amount").val(m_currency + $("#slider-range").slider("values", 0) +
                "  -  "+m_currency + $("#slider-range").slider("values", 1));
            }
        })
</script>
@endpush