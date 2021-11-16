@extends('frontend.layouts.master')
@section('title','CoolPad || HOME PAGE')
@section('main-content')

<div role="main" class="main user-profile-bg">
  <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
    <div class="container">
      <div class="row">
        <div class="col-md-12 align-self-center p-static order-2 text-center">
          <h1 class="font-weight-bold text-dark">My Account</h1>
        </div>
        <div class="col-md-12 align-self-center order-1">
          <ul class="breadcrumb d-block text-center">
           
          </ul>
        </div>
      </div>
    </div>
  </section>
  <div class="container pt-3 pb-2">
    <div class="row pt-2">
      <div class="col-lg-3 mt-4 mt-lg-0">
        <aside class="sidebar mt-2" id="sidebar">
          <h5>My Account</h5>
          <ul class="nav nav-list flex-column mb-5">
            <li class="nav-item"><a class="nav-link" href="{{ route('user') }}">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('user.order.index')}}">Orders</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('user.address.index')}}">Addresses</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('user-profile')}}">Account Details</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('user.wishlist.index')}}">Wishlist</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('user.logout')}}">Logout</a></li>
          </ul>
        </aside>
      </div>
      <div class="col-lg-9">
        <div class="shopping-cart section">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <!-- Shopping Summery -->
                <div class="row">
                  <table class="table shopping-summery">
                  <thead>
                    <tr class="main-hading">
                      <th></th>
                      <th>Product</th>
                      <th class="text-center">Price</th> 
                      <th class="text-center">Stock Status</th> 
                      <th class="text-center">Actions</th> 
                      {{-- <th class="text-center"><i class="ti-trash remove-icon"></i></th> --}}
                    </tr>
                  </thead>
                  <tbody>
                    @if(Helper::getAllProductFromWishlist())
                      @foreach(Helper::getAllProductFromWishlist() as $key=>$wishlist)
                        <tr>
                          @php 
                            $photo=explode(',',$wishlist->product['photo']);
                          @endphp
                          <td class="image" data-title="No"><img src="{{ asset($photo[0]) }}" alt="{{$photo[0]}}"></td>
                          <td class="product-des" data-title="Description">
                            <p class="product-name"><a href="{{route('product-detail',$wishlist->product['slug'])}}">{{$wishlist->product['title']}}</a></p>
                            <p class="product-des">{!!($wishlist['summary']) !!}</p>
                          </td>
                          <td class="total-amount" data-title="Total"><span>৳{{$wishlist['amount']}}</span></td>
                          <td class="total-amount" data-title="Total"><span>In Stock</span></td>
                          <td>
                            <a href="{{route('product-detail',$wishlist->product['slug'])}}" class='btn text-white btn-sm btn-secondary'>Quick view</a>
                            <a href="{{route('add-to-cart',$wishlist->product['slug'])}}" class='btn text-white btn-sm'>Add To Cart</a>
                          </td>
                          {{-- <td class="action" data-title="Remove"><a href="{{route('wishlist-delete',$wishlist->id)}}"><i class="ti-trash remove-icon"></i></a></td> --}}
                        </tr>
                      @endforeach
                    @else 
                      <tr>
                        <td class="text-center">
                          There are no any wishlist available. <a href="{{route('product-grids')}}" style="color:blue;">Continue shopping</a>

                        </td>
                      </tr>
                    @endif


                  </tbody>
                </table>
                </div>
                <!--/ End Shopping Summery -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Start Shop Newsletter  -->
@include('frontend.layouts.newsletter')
<!-- End Shop Newsletter -->

@endsection

@push('styles')
<style>

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
