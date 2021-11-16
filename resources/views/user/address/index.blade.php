@extends('frontend.layouts.master')
@section('title','CoolPad || Address')
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
            {{-- <p>Home / My Account</p> --}}
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
        <h6 class="mb-4"><img src="{{ asset('frontend/img/location.png') }}" alt="">Addresses</h6>
        <p class="mb-4 pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="row pb-1">
          <div class="col-6">
            <h4>Billing Address</h4>
            <p>Family Rule: Always give the
              first pancake to the person
              you dislike the most in
              0185425541
            </p>
            {{-- <a href="{{ route('user.address.billing') }}" class="btn  btn-sm bg-light mt-3">Edit Address</a> --}}
          </div>
          <div class="col-6">
            <h4>Shipping Address</h4>
            <p>Family Rule: Always give the
              first pancake to the person
              you dislike the most in
              0185425541
            </p>
            {{-- <a href="{{ route('user.address.shipping') }}" class="btn btn-sm bg-light mt-3">Edit Address</a> --}}
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
