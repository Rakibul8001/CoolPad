@extends('frontend.layouts.master')
@section('title','CoolPad || Smart Phones Details')

@section('main-content')


    <div class="xm-navbar">
        <div class="xm-navbar__container">
            <div class="xm-navbar__title">
                <h1><span data-key="" class="xm-text header" data-type="text" data-id="wh0pgc1o1l">Cool HUB-300</span></h1>
                <small><span data-key="" class="xm-text separator" data-type="text" data-id="cvoz7tx45o">|</span>
                <a class="xm-link" href="#" data-type="button" data-id="i5ls0029bo" target="_self">Accessories </a>
                </small>
            </div>
            <div class="xm-navbar__nav" data-id="5jotnt4w9x">
                <ul>
                    <li class="xm-navbar__nav-item xm-navbar__nav-item--current">
                        <a href="{{ route('hub-300') }}" target="_self" class="" id="nav-overview">Overview</a>
                    </li> 
                                
                    <li class="xm-navbar__nav-item">
                        <a href="#" target="_self" class="xm-navbar-btn" id="nav-buy_now">Buy Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    
 <!-- Start CoolPad 6 Phone Details Page -->

 <main class="specs">
     <div class="specs-header">

            <div class=" section_01 is-visible" data-type="bg" data-id="wseklrj0az">
                <img class="img" src="{{ asset('frontend/img/Cool-HUB-300.jpg') }}">   
            </div>    

                    
            <div class="sectionspe specs02" data-type="bg" data-id="z3dfzmjmsn">
                <div class="text-container"><div class="left">
                    <span data-key="Spec_4" class="xm-text f28 f-medium" data-type="text" data-id="fkrurkdhrl">Input</span></div>
                    <div class="right">
                        <span data-key="Spec_5" class="xm-text f16 f-regular" data-type="text" data-id="g3w9s04ow3">USB 3.1 Type C</span>                      
                     
                </div>
              </div>
            </div>
         
            <div class="sectionspe specs05" data-type="bg" data-id="buh83nrolq">
                <div class="text-container">
                    <div class="left">
                        <span data-key="Spec_25" class="xm-text f28 f-medium" data-type="text" data-id="xjmsxa50b2">USB 3.0 *3</span>
                    </div>
                    <div class="right">
                        <span data-key="Spec_26" class="xm-text f20 f-medium" data-type="text" data-id="zrzkxxtn4t">Supports up to 5GB data transfer</span>                      

                    </div>
                </div>
            </div>
            
           
            <div class="sectionspe specs08" data-type="bg" data-id="hgz66jx8lb">
                <div class="text-container">
                    <div class="left">
                        <span data-key="Spec_70" class="xm-text f28 f-medium" data-type="text" data-id="48m0vosna8">USB-C*1 </span>
                    </div>
                    <div class="right">
                        <span data-key="Spec_71" class="xm-text f16 f-regular" data-type="text" data-id="wmne2xj4ls">Supports up to 100W power input.</span>
                       
                </div>
            </div>      
           
            <div class="sectionspe specs11" data-type="bg" data-id="o9oq3txbou">
                <div class="text-container">
                    <div class="left">
                        <span data-key="Spec_85" class="xm-text f28 f-medium" data-type="text" data-id="02eo47gq2z">HDMI*1</span>
                    </div>
                    <div class="right">
                        <span data-key="Spec_86" class="xm-text f16 f-regular" data-type="text" data-id="ccrgamkoyx">Support HDMI up to 4K (3840*2160)@30HZ resolution output.</span> 
                    </div>
                </div>
            </div>     


</main>

 <!-- End CoolPad 6 Phone Details Page -->

 @include('frontend.layouts.newsletter')

          
    
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

