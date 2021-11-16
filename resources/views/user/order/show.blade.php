@extends('frontend.layouts.master')
@section('title','CoolPad || Order Show PAGE')
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
            {{-- <h2 class="font-weight-bold line-height-3 text-7 mb-0">My Profile</h2> --}}
            <h6 class="mb-4"><img src="{{ asset('frontend/img/box.png') }}" alt="">Orders #{{$order->order_number}}</h6>
            <div class="row">
              <div class="col-md-2">
                <h6>Order Number</h6>
                <p>{{$order->order_number}}</p>
              </div>
              <div class="col-md-2">
                <h6>Status</h6>
                <p>{{$order->status}}</p>
              </div>
              <div class="col-md-2">
                <h6>Date</h6>
                <p>{{$order->created_at->format('d/m/Y')}}</p>
              </div>
              <div class="col-md-2">
                <h6>Total</h6>
                <p>${{number_format($order->total_amount,2)}}</p>
              </div>
              <div class="col-md-2">
                <h6>Payment Method</h6>
                <p>{{$order->payment_method}}</p>
              </div>
            </div>
            {{-- start table --}}
        <div class="row mt-3`">
          <div class="col-lg-6 col-lx-4">
            <div class="order-info">
              <h4 class="pb-4">Your Order</h4>
              <table class="table">
                    <tr class="">
                        <td>Order Number</td>
                        <td> : {{$order->order_number}}</td>
                    </tr>
                    <tr>
                        <td>Order Date</td>
                        <td> : {{$order->created_at->format('D d M, Y')}} at {{$order->created_at->format('g : i a')}} </td>
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td> : {{$order->quantity}}</td>
                    </tr>
                    <tr>
                        <td>Order Status</td>
                        <td> : {{$order->status}}</td>
                    </tr>
                    <tr>
                      @php
                          $shipping_charge=DB::table('shippings')->where('id',$order->shipping_id)->pluck('price');
                      @endphp
                        <td>Shipping Charge</td>
                        <td> : $ {{number_format($shipping_charge[0],2)}}</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td> : $ {{number_format($order->total_amount,2)}}</td>
                    </tr>
                    <tr>
                      <td>Payment Method</td>
                      <td> : @if($order->payment_method=='cod') Cash on Delivery @else Paypal @endif</td>
                    </tr>
                    <tr>
                        <td>Payment Status</td>
                        <td> : {{$order->payment_status}}</td>
                    </tr>
              </table>
            </div>
          </div>
        </div>
            {{-- End table --}}

            {{-- Address part start --}}
            <div class="row pb-1 mt-3">
              <div class="col-md-6">
                <h4>Billing Address</h4>
                <p>Family Rule: Always give the
                  first pancake to the person
                  you dislike the most in
                  0185425541
                </p>
                <a href="" class="btn  btn-sm bg-light mt-3">Edit Address</a>
              </div>
              <div class="col-md-6">
                <h4>Shipping Address</h4>
                <p>Family Rule: Always give the
                  first pancake to the person
                  you dislike the most in
                  0185425541
                </p>
                <a href="" class="btn btn-sm bg-light mt-3">Edit Address</a>
              </div>
            </div>
          </div>
          {{-- Address Part end --}}
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
    .order-info,.shipping-info{
        padding:20px;
        width: 800px;
        border: 1px solid gainsboro;
    }
    .order-info h4,.shipping-info h4{
        text-decoration: underline;
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
