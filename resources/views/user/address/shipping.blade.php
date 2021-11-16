@extends('frontend.layouts.master')
@section('title','CoolPad || Shipping Address')
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
  <div class="container pt-3 pb-5">
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
            <h4 class="mb-4">Shipping Address</h4>
            
            <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Firsy name</label>
                  <input type="text" class="form-control"  id="inputEmail4" value="Md Rajiur">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="inputPassword4" value="Rahman">
                </div>
                <div class=" mt-2 col-12">
                  <label for="inputAddress" class="form-label">Company Name (optional)</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="Elegance Technologies Ltd">
                </div>
                <div class=" mt-2 col-12">
                  <label for="inputAddress" class="form-label">Street Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="Elegance Technologies Ltd">
                </div>
                <div class=" mt-4 col-12">                  
                  <input type="text" class="form-control" id="inputAddress" placeholder="Aportment, unit, etc (optional)" value="">
                </div>
                <div class=" mt-2 col-12">
                  <label for="inputAddress" class="form-label">Town / City</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="Elegance Technologies Ltd">
                </div>
                <div class="mt-2 col-12">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose state</option>
                      <option>Dhaka</option>
                      <option>Rangpur</option>
                      <option>Dinajpur</option>
                    </select>
                </div>
                <div class=" mt-2 col-12">
                  <label for="inputAddress" class="form-label">ZIP</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="Elegance Technologies Ltd">
                </div>
                <div class=" mt-2 col-12">
                  <label for="inputAddress" class="form-label">Phone</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="Elegance Technologies Ltd">
                </div>
                <div class=" mt-2 col-12">
                  <label for="inputAddress2" class="form-label">Email Address</label>
                  <input type="email" class="form-control" id="inputAddress2" value="rajiur@gmail.com">
                </div>                
                <div class="algn-left mt-4 col-12">
                    <button type="submit" class="btn btn-primary">SAVE ADDRESS</button>
                </div>
            </form>
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
        width: 848px;
        border: 1px solid gainsboro;
        margin-top: 45px;
        margin-bottom: 50px;
        
    }
    .order-info h4,.shipping-info h4{
        text-decoration: underline;
    }

</style>
@endpush
