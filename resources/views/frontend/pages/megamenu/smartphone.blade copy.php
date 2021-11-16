@extends('frontend.layouts.master')
@section('title','CoolPad || Smart Phones Details')

@section('main-content')


    <div class="xm-navbar">
        <div class="xm-navbar__container">
            <div class="xm-navbar__title">
                <h1><span data-key="" class="xm-text header" data-type="text" data-id="wh0pgc1o1l">Cool S</span></h1>
                <small><span data-key="" class="xm-text separator" data-type="text" data-id="cvoz7tx45o">|</span>
                <a class="xm-link" href="#" data-type="button" data-id="i5ls0029bo" target="_self">Smart Phone </a>
                </small>
            </div>
            <div class="xm-navbar__nav" data-id="5jotnt4w9x">
                <ul>
                    <li class="xm-navbar__nav-item xm-navbar__nav-item--current">
                        <a href="#" target="_self" class="" id="nav-overview">Overview</a>
                    </li>                    
                    <li class="xm-navbar__nav-item">
                        <a href="#" target="_self" class="xm-navbar-btn" id="nav-buy_now">Buy Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    
 <!-- Start CoolPad 6 Phone Details Page -->

 <div id="single-product-det" class="xm-product-box J_section-box">
    <section class="pdet-weight">
      <img src="{{asset('frontend/img/cools1.jpg')}}" alt="">
    </section>
    <section class="pdet-weight">
      <img src="{{asset('frontend/img/cools2.jpg')}}" alt="">
    </section>
    <section class="pdet-weight">
      <img src="{{asset('frontend/img/cools3.jpg')}}" alt="">
    </section>
    <section class="pdet-weight">
      <img src="{{asset('frontend/img/cools4.jpg')}}" alt="">
    </section>
    <section class="pdet-weight">
      <img src="{{asset('frontend/img/cools5.jpg')}}" alt="">
    </section>
    <section class="pdet-weight">
      <img src="{{asset('frontend/img/cools6.jpg')}}" alt="">
    </section>
    <section class="pdet-weight">
      <img src="{{asset('frontend/img/cools7.jpg')}}" alt="">
    </section>
    <section class="pdet-weight">
      <img src="{{asset('frontend/img/cools8.jpg')}}" alt="">
    </section>
    <section class="pdet-weight">
      <img src="{{asset('frontend/img/cools9.jpg')}}" alt="">
    </section>
    <section class="pdet-weight">
      <img src="{{asset('frontend/img/cools10.jpg')}}" alt="">
    </section>
   
    
  </div>

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

@push('scripts')
<script>
$(document).ready(function(){
    
    (function($) {
        "use strict";

        $('.btn-reply.reply').click(function(e){
            e.preventDefault();
            $('.btn-reply.reply').show();

            $('.comment_btn.comment').hide();
            $('.comment_btn.reply').show();

            $(this).hide();
            $('.btn-reply.cancel').hide();
            $(this).siblings('.btn-reply.cancel').show();

            var parent_id = $(this).data('id');
            var html = $('#commentForm');
            $( html).find('#parent_id').val(parent_id);
            $('#commentFormContainer').hide();
            $(this).parents('.comment-list').append(html).fadeIn('slow').addClass('appended');
          });  

        $('.comment-list').on('click','.btn-reply.cancel',function(e){
            e.preventDefault();
            $(this).hide();
            $('.btn-reply.reply').show();

            $('.comment_btn.reply').hide();
            $('.comment_btn.comment').show();

            $('#commentFormContainer').show();
            var html = $('#commentForm');
            $( html).find('#parent_id').val('');

            $('#commentFormContainer').append(html);
        });
        
 })(jQuery)
})
</script>
@endpush