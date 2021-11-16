@extends('frontend.layouts.master')
@section('title','CoolPad || User Profile')
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
            <h4 class="mb-4"><img class=" mr-4" src="{{ asset('frontend/img/user.png') }}" alt="">Account Details</h4>
            
            <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">First name</label>
                  <input type="text" class="form-control"  id="inputEmail4" value="{{$profile->name}}">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="inputPassword4" value="{{$profile->last_name}}">
                </div>
                <div class=" mt-2 col-12">
                  <label for="inputAddress" class="form-label">Display name</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="{{$profile->name}} {{$profile->last_name}}">
                </div>
                <div class=" mt-2 col-12">
                  <label for="inputAddress2" class="form-label">Email Address</label>
                  <input type="email" class="form-control" id="inputAddress2" value="{{$profile->email}}">
                </div>                
              
            </form>
          {{-- start User Account Password Change --}}
            <div class="row mt-3`">
              <div class="col-lg-6 col-lx-4">
                <div class="order-info">
                  <h6 class="pb-4"> PASSWORD CHANGE</h6>
                  <form class="row g-3" method="POST" action="{{ route('change.password') }}">
                      @csrf 
                        @foreach ($errors->all() as $error)
                          <p class="text-danger">{{ $error }}</p>
                        @endforeach 

                      <div class="col-md-12">
                        <label for="password" class="form-label"> Current Password</label>
                        <input type="password" class="form-control"  id="password" name="current_password" autocomplete="current-password">
                      </div>
                      <div class="col-md-12">
                        <label for="password" class="form-label">New Password</label>
                        <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                      </div>
                      <div class=" mt-2 col-12">
                        <label for="password" class="form-label">Confirm Password</label>
                        <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                      </div>                  
                      
                      <div class=" mt-3 col-12">
                            <button type="submit" class="btn btn-primary">SAVE CHANGES</button>
                      </div>
                  </form> 
                </div>
              </div>
            </div>
                {{-- End table --}}
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
