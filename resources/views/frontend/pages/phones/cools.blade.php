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
                        <a href="{{ route('cools-index') }}" target="_self" class="" id="nav-overview">Overview</a>
                    </li> 
                    <li class="xm-navbar__nav-item xm-navbar__nav-item--current">
                        <a href="{{ route('cools-details') }}" target="_self" class="" id="nav-overview">Specs</a>
                    </li>    
                    @php
                    $wheretobuy = array_column($wheretobuys,'url');
                    @endphp                
                    <li class="xm-navbar__nav-item">
                        <a href="{{ $wheretobuy[0] }}" target="_self" class="xm-navbar-btn" id="nav-buy_now">Buy Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

 <!-- Start CoolPad 6 Phone Details Page -->

 <main class="poco-x3-pro">
 <div class=" section_01 is-visible" data-type="bg" data-id="wseklrj0az"><img class="img" data-id="g9b28buwx8" src="{{ asset('frontend/img/CoolS/bg1.jpg') }}">
 <div class="text-content">
   <span data-key="name_1" class="xm-text title bold wow slideInDown" data-type="text" data-id="fbu3ehcoal">Cool S</span>
   <span data-key="slogan_1" class="xm-text feature medium wow slideInLeft" data-type="text" data-id="quruz4ptkx">Exactly What You Need,<br>and More</span>
   <span data-key="slogan_2" class="xm-text desc medium wow slideInRight" data-type="text" data-id="9wqzj0hcsg">Quad Rear Camera 48MP+8MP+5MP+0.3MP <br><br> 8-core processor of Helio P60 <br> 5000mAh Battery</span>
       <div data-id="9zj0dwkvb3" class="xm-price price bold">
          <span class="xm-price__label"></span>
          <span class="xm-price__sNum"></span>
      </div>
    </div>
  </div>

      <div class="section section_02 is-visible" data-type="bg" data-id="g0zxgmm5a9">
        <div class="text-content"><span data-key="overview_1" class="xm-text title bold wow slideInDown" data-type="text" data-id="xl8kh9ftnb">EVERYTHING YOU LOVED ABOUT<br>Cool S</span>
        <span data-key="overview_2" class="xm-text feature regular wow slideInLeft" data-type="text" data-id="bqe64we58v">Non-stop user of cell phone is free to spend with Cool S anytime.<br>Cool S promises user with a faster and smoother experience</span>
        <span data-key="overview_3" class="xm-text title01 medium wow slideInRight" data-type="text" data-id="qdp0ie8mba">Upgrade where it matters</span>
        <span data-key="overview_4" class="xm-text title02 heavy wow slideInLeft" data-type="text" data-id="r3dcf1a1uh">MORE</span>
        <div class="item item01 wow slideInRight"><span data-key="overview_5" class="xm-text title03 bold wow slideInRight" data-type="text" data-id="eqg7n5z4g2">PERFORMANCE</span>
        <span data-key="overview_6" class="xm-text desc regular" data-type="text" data-id="5v3rjwj379">8-core Processor of Helio P60 | 4GB +128GB Memory</span>
        <div class="line"></div>
      </div>
      <div class="item item02 wow slideInLeft">
        <span data-key="overview_7" class="xm-text title03 bold" data-type="text" data-id="wkhu2g8dzs">DESIGN</span>
        <span data-key="overview_8" class="xm-text desc regular" data-type="text" data-id="qzwdcjywxz">6.53"full-screen, an entirely new visual experience</span>
        <div class="line">    
        </div>
      </div>
      <div class="item item03 wow slideInRight">
          <span data-key="overview_9" class="xm-text title03 bold" data-type="text" data-id="f4fpusoya5">CREATIVE</span>
          <span data-key="overview_10" class="xm-text desc regular" data-type="text" data-id="u6uw3wnaai">Quad Rear Camera designed for high quality Photo & Video</span>
           <div class="line">    
          </div>
        </div>
      </div>
    </div>

      <div class="section section_04 is-visible" data-type="bg" data-id="1q1cmxm5ea" style="background-image:url({{ asset('frontend/img/CoolS/bg5.jpg') }})">
          <div class="text wow slideInDown"><span data-key="overview_31" class="xm-text feature medium f52" data-type="text" data-id="w96ddjkbd4">Display</span>
          <span data-key="overview_32" class="xm-text title01 heavy f70" data-type="text" data-id="i0l12r0urg">6.53"full-screen <br>New Visual Experience</span>
          <div class="line"></div>
          <span data-key="overview_33" class="xm-text desc light f32" data-type="text" data-id="2bvwnqdotw">The front-facing camera hides underneath of<br>the full-screen which provides a bigger visual perspective<br>The 6.53-inch screen confronts users with <br> an entirely new sensory experience</span>                   
        </div>
      </div>

      
      <div class="section section_05 is-visible" data-type="bg" data-id="7aj8fq6f1w" style="background-image:url({{ asset('frontend/img/CoolS/bg7.jpg')}})">
        <div class="text">
          <span data-key="overview_37" class="xm-text title01 heavy f70 wow slideInLeft" data-type="text" data-id="oiargksxfl">Keep enough space for your wonderful moment</span>
          <span data-key="overview_38" class="xm-text desc light f32 wow slideInRight" data-type="text" data-id="ak7io5c5tu">Cool S promises user with a faster and smoother experience by configuring the eight-core processor and 128GB of storage space. You can save videos, music and photos whatever you want with 256GB expanded memory.
            </span>
         
          <span data-key="overview_39" class="xm-text title02 regular f36 wow slideInDown" data-type="text" data-id="5y88wld9cx">4GB RAM </span>
          <span data-key="overview_40" class="xm-text title03 regular f36 wow slideInDown" data-type="text" data-id="vxpeg7e9je">128GB ROM</span>
          <span data-key="overview_41" class="xm-text title04 regular f36 wow slideInDown" data-type="text" data-id="96wrd6qt5p">256GB Expanded memory</span>
        </div>
      </div>

    <div class="section section_06 is-visible" data-type="bg" data-id="wh3o24sy23" style="background-image:url({{ asset('frontend/img/CoolS/bg9.jpg')}})">
      <div class="text-content "><span data-key="overview_42" class="xm-text title heavy f120 wow slideInDown" data-type="text" data-id="vvl4xonpz6">Face & fingerprint unlock, <br> smoothly and accurately</span>
          <span data-key="overview_43" class="xm-text feature medium f36 wow slideInLeft" data-type="text" data-id="jbet5x8edo"></span>
          <span data-key="overview_44" class="xm-text title01 heavy f70 wow slideInRight" data-type="text" data-id="lgcsxktg6y"></span>
      </div>          
      <span data-key="overview_45" class="xm-text desc light f32" data-type="text" data-id="iib5g57gzm"></span>
    </div>

    <div class="section section_07 is-visible" data-type="bg" data-id="1q1cmxm5ea" style="background-image:url({{ asset('frontend/img/CoolS/bg6.jpg')}})">
          <div class="text"><span data-key="overview_31" class="xm-text feature medium f52 wow slideInDown" data-type="text" data-id="w96ddjkbd4"></span>
          <span data-key="overview_32" class="xm-text title01 heavy f70 wow slideInLeft" data-type="text" data-id="i0l12r0urg">Long-endurance <br>keep energized</span>
          <div class="line"></div>
          <span data-key="overview_33" class="xm-text desc light f32 wow slideInDown" data-type="text" data-id="2bvwnqdotw">Cool S helps relieve stress about low battery<br>anxiety with the large battery capacity of<br>5000mAh . Even though the Non-stop user of<br>cell phone is free to spend with Cool S anytime.
</span>                   
        </div>
      </div>


      <div class="section section_08 is-visible" data-type="bg" data-id="q002lkyl75" style="background-image:url({{ asset('frontend/img/CoolS/bg10.jpg')}})">
        <div class="text">
          <span data-key="overview_50" class="xm-text title01 heavy f70 wow slideInDown" data-type="text" data-id="46u391livm">Outstanding appearance shows individual character</span>
          <div class="line">     
          </div>
          <div class="item item01 wow slideInLeft">
            <span data-key="overview_51" class="xm-text title02 bold f36" data-type="text" data-id="1gygc98cqn">Night black</span>
            
          </div>
          <div class="item item02 wow slideInRight">
            <span data-key="overview_53" class="xm-text title02 bold f36" data-type="text" data-id="b8h18igsvb">Moon white</span>
           
          </div>
          <div class="item item02 wow slideInRight">
            <span data-key="overview_53" class="xm-text title02 bold f36" data-type="text" data-id="b8h18igsvb">Lapis Blue</span>
           
          </div>
        </div>      
    </div>

    <div class="section section_13 is-visible" data-type="bg" data-id="jtsw73pat1" style="background-image:url({{ asset('frontend/img/CoolS/bg3.jpg')}})">
      <div class="text">
        <span data-key="overview_83" class="xm-text feature medium f52 wow slideInDown" data-type="text" data-id="vp7g655rm1"></span>
        <span data-key="overview_84" class="xm-text title01 heavy f70 wow slideInRight" data-type="text" data-id="530f3ocsiv"></span>
        <div class="line"></div><span data-key="overview_85" class="xm-text desc light f32 wow slideInDown" data-type="text" data-id="j7fx8zflm6"></span>
        
        
      </div>    
  </div>


    <div class="section section_20 is-visible" data-type="bg" data-id="b78sc6slq2" style="background-image:url({{ asset('frontend/img/CoolS/bg12.jpg')}})">
      <a class="xm-link title bold f52" href="{{ route('cools-details') }}" data-type="button" data-id="0hxdd8z12i" target="_self">See specs &gt;</a>
    </div>


    <div class="section section_21 is-visible" data-type="bg" data-id="e0zl258zdz">
      <span data-key="overview_116" class="xm-text title regular f16" data-type="text" data-id="tnn93kq2qc">Android 10.0: <br>Focus on the optimization of the system, greater protection of user <br>privacy and securityenhance the user experience, not only in the performance <br>battery life, speed, security but also AI image processing,giving<br>users more control over
various applications.</span>
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


    
/*  Start Cool S Phone Details Page  */


.poco-x3-pro {
    overflow: hidden;
    background: #fff;
}

.poco-x3-pro .section_01 {
    position: relative;

    margin-bottom: -1px;
}

.poco-x3-pro .section {
    position: relative;
    box-sizing: border-box;
    min-width: 1226PX;
    overflow: hidden;
    border: none !important;
}

.poco-x3-pro .section_01 .text-content {
    position: absolute;
    top: 250px;
    left: 329px;
    width: 500px;
    text-align: left;
}

.poco-x3-pro .section_01 .title {
    color: #ffd400;
    font-size: 72px;
    font-weight: 700;
    line-height: 1;
}

.poco-x3-pro .section_01 .feature {
    margin-top: 18px;
    color: #fff;
    font-size: 39px;
    line-height: 46px;
}

.poco-x3-pro .section_01 .desc {
    margin-top: 20px;
    color: #fff;
    font-size: 24px;
    line-height: 37px;
}

.poco-x3-pro .xm-text,
.poco-x3-pro .section img {
    display: block;
}

.poco-x3-pro .section_02 {
    background-image: linear-gradient(to bottom right, #ffd400, #f99e01);
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
}

.poco-x3-pro .section_02 .feature {
    margin-top: 20px;
    font-size: 24px;
    line-height: 34px;
}

.poco-x3-pro .section_02 .title01 {
    margin-top: 100px;
    font-size: 33px;
    line-height: 0px;
}

.poco-x3-pro .section_02 .title02 {
    margin-top: 40px;
    font-size: 248px;
    line-height: 01;
    font-weight: 800;
}

.poco-x3-pro .section_02 .title03 {
    font-size: 60px;
    line-height: 120px;
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


.poco-x3-pro .section_04 {
    background-size: contain;
    height: 59.75rem;
    width: 120rem;
}
.poco-x3-pro .section_04 .text {
    padding-left: 1100px;
    padding-top: 168px;
    text-align: left;
  
}
.poco-x3-pro .section_04 .feature {
    color: #fff;
    font-size: 40px;
}
.poco-x3-pro .section_04 .title01 {
    color: #ffd400;
    line-height: 4.296875rem;
    margin-top: 1.117188rem;
    font-size: 56px;
    font-weight: 700;
}
.poco-x3-pro .section_04 .line {
    background: #ffd400;
    height: 0.2438rem;
    margin-top: 1.164063rem;
    width: 2.175781rem;
}
.poco-x3-pro .section_04 .desc {
    margin-top: 2.164063rem;
    color: #bfbfbf;
    font-size: 23px;
    font-weight: 300;
}


.poco-x3-pro .section_05 {
    background-size: contain;
    height: 58.75rem;
    width: 120rem;
}
.poco-x3-pro .section_05 .text {
    width: 57.125rem;
    padding-top: 3.195313rem;
    padding-left: 21.9375rem;
    text-align: left;
}

.poco-x3-pro .section_05 .feature {
    color: #fff;
    font-size: 38px;
}
.poco-x3-pro .section_05 .title01 {
    color: #20b4e2;
    line-height: 4.296875rem;
    margin-top: 1.117188rem;
    font-size: 56px;
    font-weight: 700;
}
.poco-x3-pro .section_05 .desc {
    margin-top: 2.164063rem;
    color: #353535;
    font-size: 23px;
    font-weight: 300;
}

.poco-x3-pro .section_05 .line {
    background: #20b4e2;
    height: 0.2438rem;
    margin-top: 1.164063rem;
    width: 2.175781rem;
}
.poco-x3-pro .section_05 .title02 {
    margin-top: 1.164063rem;
    font-size: 24px;
    color: #fff;
}

.poco-x3-pro .section_05 .title02, .poco-x3-pro .section_05 .title03, .poco-x3-pro .section_05 .title04 {
    color: #353535;
    line-height: 3.210938rem;
    font-size: 24px;
}






.poco-x3-pro .section_06 {
    width: 100%;
    height: 60.101563rem;
    background-size: contain;
}

.poco-x3-pro .section_06 .text-content {
    position: absolute;
    top: 140px;
    width: 100%;
    text-align: center;
}

.poco-x3-pro .section_06 .title {
    color: #ffd400;
    color: transparent;
    line-height: 6.476563rem;
    background-image: url(//i01.appmifile.com/webfile/globalimg/products/pc/poco-x3-pro/text-mage.jpg);
    background-position: -340% -56%;
    background-size: 131%;
    -webkit-background-clip: text;
    background-clip: text;
    background-origin: border-box;
    font-size: 92px;
    font-weight: 700;
}

.poco-x3-pro .section_06 .feature {
    margin-top: 18.117188rem;
    color: #fff;
    line-height: 3.296875rem;
    font-size: 32px;
}

.poco-x3-pro .section_06 .title01 {
    color: #ffd400;
    line-height: .296875rem;
    font-size: 38px;
    font-weight: 600;
    margin-top: 20px;
}

.poco-x3-pro .section_06 .video {
    position: absolute;
    top: 61.296875rem;
    left: 36.125rem;
    width: 47.50rem;
}

audio,
canvas,
progress,
video {
    display: inline-block;
    vertical-align: initial;
}

.poco-x3-pro .section_06 .desc {
    position: absolute;
    top: 91.734375rem;
    width: 100%;
    color: #000;
    line-height: 2.164063rem;
    text-align: center;
    font-size: 28px;
}



.poco-x3-pro .section_07 {
    background-size: contain;
    height: 59.4rem;
    width: 120rem;
}
.poco-x3-pro .section_07 .text {
    padding-left: 1100px;
    padding-top: 168px;
    text-align: left;
  
}
.poco-x3-pro .section_07 .feature {
    color: #fff;
    font-size: 40px;
}
.poco-x3-pro .section_07 .title01 {
    color: #ffd400;
    line-height: 4.296875rem;
    margin-top: 1.117188rem;
    font-size: 56px;
    font-weight: 700;
}
.poco-x3-pro .section_07 .line {
    background: #ffd400;
    height: 0.2438rem;
    margin-top: 1.164063rem;
    width: 2.175781rem;
}
.poco-x3-pro .section_07 .desc {
    margin-top: 2.164063rem;
    color: #bfbfbf;
    font-size: 23px;
    font-weight: 300;
}

.poco-x3-pro .section_08 {
    width: 120rem;
    height: 60.36875rem;
    background-size: contain;
}
.poco-x3-pro .section_08 .text {
    width: 57.125rem;
    padding-top: 10.195313rem;
    padding-left: 21.9375rem;
    text-align: left;
}
.poco-x3-pro .section_08 .feature {
    color: #fff;
    font-size: 40px;
}
.poco-x3-pro .section_08 .title01 {
    color: #02587b;
    line-height: 4.296875rem;
    margin-top: 1.117188rem;
    font-size: 56px;
    font-weight: 700;
}
.poco-x3-pro .section_08 .line {
    background: #02587b;
    height: 0.2438rem;
    margin-top: 1.164063rem;
    width: 2.175781rem;
}

.poco-x3-pro .section_08 .item01, .poco-x3-pro .section_08 .item02 {
    margin-top: 2.140625rem;
}

.poco-x3-pro .section_08 .title02 {
    color: #353535;
    line-height: 1;
    font-size: 26px;
    font-weight: 600;
}
.poco-x3-pro .section_08 .desc {
    margin-top: 1.023438rem;
    color: #fff;
    font-size: 18px;
}

.poco-x3-pro .section_13 {

    height: 950px;
    background-size: contain;
}

.poco-x3-pro .section_13 .text {
    position: absolute;
    top: .753906rem;
    z-index: 5;
    width: 100%;
    text-align: center;
}

.poco-x3-pro .section_13 .feature {
    color: #fff;
    font-size: 48px;
    margin-top: 79px;
}

.poco-x3-pro .section_13 .title01 {
    margin-top: 2.09375rem;
    color: #ffd400;
    line-height: .296875rem;
    font-size: 46px;
    font-weight: 700;
}

.poco-x3-pro .section_13 .line {
    width: 45px;
    height: 4px;
    margin: 45px auto 0;
    text-align: center;
    background: #ffd400;
}

.poco-x3-pro .section_13 .desc {
    margin-top: 30px;
    color: #9fa0a0;
    font-size: 26px;
}

.poco-x3-pro .section_13 .phone {
    display: block;
    width: 1172px;
    height: 400px;
    margin: 92px auto 0;
}

.poco-x3-pro .section_13 .left {
    left: 180px;
}

.poco-x3-pro .section_13 .right {
    left: 1093px;
}

.poco-x3-pro .section_13 .left,
.poco-x3-pro .section_13 .right {
    position: absolute;
    top: 385px;
    z-index: 4;
    display: block;
    width: 39.425781rem;
    /* height: 20rem; */
    animation: scale-ani 2s ease-in 0s infinite normal;
}



.poco-x3-pro .section_16 {
    position: relative;
    width: 120rem;
    height: 59.585938rem;
    background: #131314;
}
.poco-x3-pro .section_16 .text {
    position: absolute;
    top: 5.585938rem;
    z-index: 5;
    width: 100%;
    text-align: center;
}
.poco-x3-pro .section_16 .feature {
    color: #fff;
    font-size: 48px;  
}
.poco-x3-pro .section_16 .title01 {
    margin-top: 2.09375rem;
    color: #ffd400;
    line-height: 3.296875rem;
    font-size: 46px;
    font-weight: 700;
}

.poco-x3-pro .section_16 .desc {
    margin-top: 30px;
    color: #9fa0a0;
    font-size: 26px;
}
.poco-x3-pro .section_16 .video {
    position: absolute;
    top: 26.351563rem;
    left: 33.179688rem;
    width: 51.640625rem;
    height: 28.554688rem;
}


.poco-x3-pro .section_20 {
    width: 10rem;
    height: 1.855469rem;
    background-size: contain;
}
.poco-x3-pro .section_20 {
    width: 120rem;
    height: 21.855469rem;
    background-size: contain;
}
.poco-x3-pro .section_20 .title {
    position: absolute;
    top: 9.789063rem;
    left: 31.742188rem;
    color: #f7f7f7;
    font-size: 30px;
    font-weight: 700;
}
.poco-x3-pro .section_21 {
    padding: 3.257813rem 25.617188rem 5.28125rem 23.1875rem;
    background: #000;
}

 /*Start For 1280 dextop */

@media (max-width: 1280px) {
.poco-x3-pro .section_01 .text-content {   
    top: 162px;
    left: 157px;  
}
.poco-x3-pro .section_04 {  
    height: 40.75rem;
   
}
.poco-x3-pro .section_04 .text {
    padding-left: 613px;
    padding-top: 56px;  
}
.poco-x3-pro .section_05 {   
    height: 41.75rem;   
}
.poco-x3-pro .section_05 .text {   
    padding-top: 0;
    padding-left: 9.9375rem;      
}
.poco-x3-pro .section_06 {  
    height: 40.101563rem;   
}
.poco-x3-pro .section_06 .title {    
    line-height: 4.476563rem;   
    font-size: 69px;
    font-weight: 600;
}
.poco-x3-pro .section_07 {    
    height: 40.4rem; 
}
.poco-x3-pro .section_07 .text {
    padding-left: 646px;
    padding-top: 59px; 
}
.poco-x3-pro .section_08 {   
    height: 40.36875rem;   
}
.poco-x3-pro .section_08 .text {
    width: 49.125rem;
    padding-top: 0;
    padding-left: 9.9375rem;  
}
.poco-x3-pro .section_13 {
    height: 640px;   
}
.poco-x3-pro .section_20 {    
    height: 15.855469rem;   
}
.poco-x3-pro .section_20 .title { 
    top: 6.789063rem;
    left: 19.742188rem;    
}
.poco-x3-pro .section_21 {
    padding: 2.257813rem 24.617188rem 2.28125rem 15.1875rem;    
}

 /*End  For 1280 dextop */


/*  End Cool SPhone Details Page  */
</style>
@endpush

