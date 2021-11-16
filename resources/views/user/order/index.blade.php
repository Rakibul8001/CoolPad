@extends('frontend.layouts.master')
@section('title','CoolPad || Order PAGE')
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
      <div class="col-3">
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
      <div class="col-9">
        {{-- <h2 class="font-weight-bold line-height-3 text-7 mb-0">My Profile</h2> --}}
        <h5 class="mb-4"><img src="{{ asset('frontend/img/box.png') }}" alt="">Orders</h5>
        <div class="row pb-1">
          <div class="col-12">
            <!-- Shopping Summery -->
            <div class="row">
              <table class="table shopping-summery" >
              <thead>
                <tr class="main-hading order-head">
                  <th>Order</th>
                  <th>Date</th>
                  <th>Status</th> 
                  <th>Total</th> 
                  <th>Actions</th> 
                </tr>
              </thead>
              <tbody>
                @foreach($orders as $order)  
                @php
                    $shipping_charge=DB::table('shippings')->where('id',$order->shipping_id)->pluck('price');
                @endphp  
                    <tr>
                        <td>{{$order->order_number}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>
                            @if($order->status=='new')
                              <span class="badge badge-primary">{{$order->status}}</span>
                            @elseif($order->status=='process')
                              <span class="badge badge-warning">{{$order->status}}</span>
                            @elseif($order->status=='delivered')
                              <span class="badge badge-success">{{$order->status}}</span>
                            @else
                              <span class="badge badge-danger">{{$order->status}}</span>
                            @endif
                        </td>
                        <td>৳{{number_format($order->total_amount,2)}}</td>
                        <td >
                            <a class="viewbtn" href="{{route('user.order.show',$order->id)}}">view</a>
                        </td>
                    </tr>  
                @endforeach
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