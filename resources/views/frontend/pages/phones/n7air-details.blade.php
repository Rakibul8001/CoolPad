@extends('frontend.layouts.master')
@section('title','CoolPad || Smart Phones Details')

@section('main-content')


<div class="xm-navbar">
    <div class="xm-navbar__container">
        <div class="xm-navbar__title">
            <h1><span data-key="" class="xm-text header" data-type="text" data-id="wh0pgc1o1l">N7 Air</span></h1>
            <small><span data-key="" class="xm-text separator" data-type="text" data-id="cvoz7tx45o">|</span>
                <a class="xm-link" href="#" data-type="button" data-id="i5ls0029bo" target="_self">Smart Phone </a>
            </small>
        </div>
        <div class="xm-navbar__nav" data-id="5jotnt4w9x">
            <ul>
                <li class="xm-navbar__nav-item xm-navbar__nav-item--current">
                    <a href="{{ route('n7air-index') }}" target="_self" class="" id="nav-overview">Overview</a>
                </li>
                <li class="xm-navbar__nav-item xm-navbar__nav-item--current">
                    <a href="{{ route('n7air-details') }}" target="_self" class="" id="nav-overview">Specs</a>
                </li>
                @php
                $wheretobuy = array_column($wheretobuys,'url');
                @endphp
                <li class="xm-navbar__nav-item">
                    <a href="{{ $wheretobuy[2] }}" target="_self" class="xm-navbar-btn" id="nav-buy_now">Buy Now</a>
                </li>
            </ul>
        </div>
    </div>
</div>



<!-- Start CoolPad 6 Phone Details Page -->


<main class="specs">
    <div class="specs-header">

        <div class=" section_01 is-visible" data-type="bg" data-id="wseklrj0az">
            <img class="img" src="{{ asset('frontend/img/cool-n7-air.jpg') }}">
        </div>


        <div class="sectionspe specs02" data-type="bg" data-id="z3dfzmjmsn">
            <div class="text-container">
                <div class="left">
                    <span data-key="Spec_4" class="xm-text f28 f-medium" data-type="text"
                        data-id="fkrurkdhrl">Platform</span></div>
                <div class="right">
                    <span data-key="Spec_5" class="xm-text f16 f-regular" data-type="text"
                        data-id="g3w9s04ow3">MT6737</span>

                </div>
            </div>
        </div>
        <div class="sectionspe specs03" data-type="bg" data-id="satkszu6vr">
            <div class="text-container">
                <div class="left">
                    <span data-key="Spec_8" class="xm-text f28 f-medium" data-type="text" data-id="j2pkfkor1n">Os</span>
                </div>
                <div class="right"><span data-key="Spec_9" class="xm-text f16 f-regular" data-type="text"
                        data-id="zu5apv2zsb">Android 10 Go</span>

                </div>
            </div>
        </div>
        <div class="sectionspe specs05" data-type="bg" data-id="buh83nrolq">
            <div class="text-container">
                <div class="left">
                    <span data-key="Spec_25" class="xm-text f28 f-medium" data-type="text"
                        data-id="xjmsxa50b2">Band</span>
                </div>
                <div class="right">
                    <span data-key="Spec_26" class="xm-text f20 f-medium" data-type="text" data-id="zrzkxxtn4t">GSM
                        B2/3/5/8</span>
                    <span data-key="Spec_27" class="xm-text f16 f-regular" data-type="text" data-id="ge085tp0xn">WCDMA
                        B1/8</span>
                    <span data-key="Spec_28" class="xm-text f16 f-regular" data-type="text" data-id="wjs4vuzagi">LTE
                        B1/3/7/8/20</span>
                </div>
            </div>
        </div>
        <div class="sectionspe specs05" data-type="bg" data-id="hvs6qs16v3">
            <div class="text-container">
                <div class="left"><span data-key="Spec_29" class="xm-text f28 f-medium" data-type="text"
                        data-id="xqjqlex7ht">Memory</span>
                </div>
                <div class="right"><span data-key="Spec_30" class="xm-text f16 f-regular" data-type="text"
                        data-id="40epgtk75w">2GB+16GB</span>

                </div>
            </div>
        </div>

        <div class="sectionspe specs07" data-type="bg" data-id="7x1tl01y71">
            <div class="text-container">
                <div class="left">
                    <span data-key="Spec_58" class="xm-text f28 f-medium" data-type="text"
                        data-id="hlcz9ds34p">LCD</span>
                </div>
                <div class="right">
                    <div class="txt">
                        <div class="items item05">
                            <span data-key="Spec_59" class="xm-text f16 f-bold" data-type="text"
                                data-id="hyl9nviz9n">6.517” water-drop HD- 540*1200</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sectionspe specs08" data-type="bg" data-id="hgz66jx8lb">
            <div class="text-container">
                <div class="left">
                    <span data-key="Spec_70" class="xm-text f28 f-medium" data-type="text"
                        data-id="48m0vosna8">Camera</span>
                </div>
                <div class="right">
                    <span data-key="Spec_71" class="xm-text f16 f-regular" data-type="text" data-id="wmne2xj4ls">Front
                        5MP</span>
                    <span data-key="Spec_72" class="xm-text f16 f-regular" data-type="text" data-id="i51m5d1rs8">Rear
                        13MP AF +0.3MP+0.3MP</span>
                </div>
            </div>
        </div>
        <div class="sectionspe specs09" data-type="bg" data-id="1nudpwtnme">
            <div class="text-container">
                <div class="left">
                    <span data-key="Spec_75" class="xm-text f28 f-medium" data-type="text"
                        data-id="85fszad7xq">Battery</span>
                </div>
                <div class="right">
                    <span data-key="Spec_76" class="xm-text f16 f-bold" data-type="text" data-id="ioorl0lgb4">4000mAh,
                        Li-polymer</span>

                </div>
            </div>
        </div>
        <div class="sectionspe specs10" data-type="bg" data-id="uc7fkb4nna">
            <div class="text-container">
                <div class="left">
                    <span data-key="Spec_82" class="xm-text f28 f-medium" data-type="text"
                        data-id="6v3h7gpr5m">WIFI/BT/FM</span>
                </div>
                <div class="right">
                    <span data-key="Spec_83" class="xm-text f16 f-regular" data-type="text"
                        data-id="z6g788h1f0">Yes</span>
                </div>
            </div>
        </div>
        <div class="sectionspe specs11" data-type="bg" data-id="o9oq3txbou">
            <div class="text-container">
                <div class="left">
                    <span data-key="Spec_85" class="xm-text f28 f-medium" data-type="text"
                        data-id="02eo47gq2z">Flash</span>
                </div>
                <div class="right">
                    <span data-key="Spec_86" class="xm-text f16 f-regular" data-type="text" data-id="ccrgamkoyx">Yes,
                        rear</span>

                </div>
            </div>
        </div>
        <div class="sectionspe specs12" data-type="bg" data-id="svaq8e5r7x">
            <div class="text-container">
                <div class="left">
                    <span data-key="Spec_88" class="xm-text f28 f-medium" data-type="text" data-id="y9zi91sg1h">Finger
                        print </span>
                </div>
                <div class="right">
                    <span data-key="Spec_89" class="xm-text f16 f-regular" data-type="text"
                        data-id="4x6lbs1mau">No</span>

                </div>
            </div>
        </div>
        <div class="sectionspe specs13" data-type="bg" data-id="uxib6r2n27">
            <div class="text-container">
                <div class="left">
                    <span data-key="Spec_92" class="xm-text f28 f-medium" data-type="text"
                        data-id="a45q7tpvf8">I/O</span>
                </div>
                <div class="right">
                    <span data-key="Spec_93" class="xm-text f16 f-regular" data-type="text"
                        data-id="3l3giew633">Micro-USB, 5V 2A, 3.5mm audio jack</span>
                </div>
            </div>
        </div>

        <div class="sectionspe specs13" data-type="bg" data-id="uxib6r2n27">
            <div class="text-container">
                <div class="left">
                    <span data-key="Spec_92" class="xm-text f28 f-medium" data-type="text"
                        data-id="a45q7tpvf8">Others</span>
                </div>
                <div class="right">
                    <span data-key="Spec_93" class="xm-text f16 f-regular" data-type="text" data-id="3l3giew633">GPS,
                        Dual SIM, G/P/L sensor</span>
                </div>
            </div>
        </div>

        <div class="sectionspe specs13" data-type="bg" data-id="uxib6r2n27">
            <div class="text-container">
                <div class="left">
                    <span data-key="Spec_92" class="xm-text f28 f-medium" data-type="text"
                        data-id="a45q7tpvf8">Dimension</span>
                </div>
                <div class="right">
                    <span data-key="Spec_93" class="xm-text f16 f-regular" data-type="text"
                        data-id="3l3giew633">167*77.4*8.9mm</span>
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