@extends('frontend.layouts.master')
@section('title','CoolPad || Accessories Details')

@section('main-content')


<div class="xm-navbar">
        <div class="xm-navbar__container">
            <div class="xm-navbar__title">
                <h1><span data-key="" class="xm-text header" data-type="text" data-id="wh0pgc1o1l">Coolpad Router CRT01</span></h1>
                <small><span data-key="" class="xm-text separator" data-type="text" data-id="cvoz7tx45o">|</span>
                <a class="xm-link" href="#" data-type="button" data-id="i5ls0029bo" target="_self">Accessories </a>
                </small>
            </div>
            <div class="xm-navbar__nav" data-id="5jotnt4w9x">
                <ul>
                    <li class="xm-navbar__nav-item xm-navbar__nav-item--current">
                        <a href="{{ route('cool-router') }}" target="_self" class="" id="nav-overview">Overview</a>
                    </li> 
                    <li class="xm-navbar__nav-item xm-navbar__nav-item--current">
                        <a href="{{ route('cool-router-details') }}" target="_self" class="" id="nav-overview">Specs</a>
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
      <img src="{{asset('frontend/img/coolpad-Router_CRT01.jpg')}}" alt="">
    </section> 
    
  </div>
  <main class="poco-x3-pro">


      <div class="section section_02 is-visible" data-type="bg" data-id="g0zxgmm5a9">
        <div class="text-content"><span data-key="overview_1" class="xm-text title bold wow slideInDown" data-type="text" data-id="xl8kh9ftnb">Key Points</span>     

            <span data-key="overview_6" class="xm-text desc regular wow slideInLeft" data-type="text" data-id="5v3rjwj379">Maximum 32 number of visitors</span>
            <div class="line wow slideInLeft"></div>            

            <span data-key="overview_6" class="xm-text desc regular wow slideInLeft" data-type="text" data-id="5v3rjwj379">MTK7628KN inclusion 8MB DDR1 Master control  </span>
            <div class="line wow slideInLeft"></div>            

            <span data-key="overview_6" class="xm-text desc regular wow slideInLeft" data-type="text" data-id="5v3rjwj379">Support Mini Sim card*1</span>
            <div class="line wow slideInLeft"></div>            
            <span data-key="overview_6" class="xm-text desc regular wow slideInLeft" data-type="text" data-id="5v3rjwj379">2.4~2.4835GHz Frequency Range
</span>
            <div class="line wow slideInLeft"></div>
           
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


    .poco-x3-pro .xm-text,
.poco-x3-pro .section img {
    display: block;
}

.poco-x3-pro .section_02 {
    background-image: linear-gradient(to bottom right, #ffc107, #ff5722);
}

.poco-x3-pro .section_02 .text-content {
    padding: 80px 0 70px;
    color: #000;
    text-align: center;
}

.poco-x3-pro .section_02 .title {
    font-size: 44px;
    line-height: 57px;
    font-weight: 700;
    padding-bottom: 32px;
}

.poco-x3-pro .section_02 .desc {
    font-size: 26px;
    line-height: 40px;
}

.poco-x3-pro .section_02 .line {
    width: 640px;
    height: 1px;
    margin: 18px auto 0;
    background-color: #000;
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