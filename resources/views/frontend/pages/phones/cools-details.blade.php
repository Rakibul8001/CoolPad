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

<main class="specs">
    <div class="specs-header">

        <div class=" section_01 is-visible" data-type="bg" data-id="wseklrj0az">
            <img class="img" src="{{ asset('frontend/img/Cool-S-s.jpg') }}">
        </div>


        <div class="sectionspe specs02" data-type="bg" data-id="z3dfzmjmsn">
            <div class="text-container">
                <div class="left">
                    <span data-key="Spec_4" class="xm-text f28 f-medium" data-type="text"
                        data-id="fkrurkdhrl">Network</span></div>
                <div class="right">
                    <span data-key="Spec_5" class="xm-text f16 f-regular" data-type="text"
                        data-id="g3w9s04ow3">GSM:B2/B3/B5/B8 </span>
                    <span data-key="Spec_6" class="xm-text f16 f-regular" data-type="text"
                        data-id="a9bblsuej4">WCDMA:B1/B2/B5/B8</span>
                    <span data-key="Spec_6" class="xm-text f16 f-regular" data-type="text"
                        data-id="a9bblsuej4">FDD-LTE:B1/B3/B5/B7/B8/B20</span>
                    <span data-key="Spec_6" class="xm-text f16 f-regular" data-type="text"
                        data-id="a9bblsuej4">TDD-LTE:B34/B38/B39/B40/B41</span>
                    <span data-key="Spec_6" class="xm-text f16 f-regular" data-type="text"
                        data-id="a9bblsuej4">WLAN:802.11 a/b/g/n/ac,Bluetooth V4.2</span>

                </div>
            </div>
        </div>
        <div class="sectionspe specs03" data-type="bg" data-id="satkszu6vr">
            <div class="text-container">
                <div class="left">
                    <span data-key="Spec_8" class="xm-text f28 f-medium" data-type="text"
                        data-id="j2pkfkor1n">Screen</span>
                </div>
                <div class="right"><span data-key="Spec_9" class="xm-text f16 f-regular" data-type="text"
                        data-id="zu5apv2zsb">6.53" FHD+</span>
                    <span data-key="Spec_10" class="xm-text f16 f-regular" data-type="text"
                        data-id="678qo26qly">1080*2340</span>
                    <span data-key="Spec_11" class="xm-text f16 f-regular" data-type="text"
                        data-id="yjwjuvo802">161.2*76.2*8.9mm</span>
                </div>
            </div>
        </div>
        <div class="sectionspe specs05" data-type="bg" data-id="buh83nrolq">
            <div class="text-container">
                <div class="left">
                    <span data-key="Spec_25" class="xm-text f28 f-medium" data-type="text"
                        data-id="xjmsxa50b2">Chipset</span>
                </div>
                <div class="right">
                    <span data-key="Spec_26" class="xm-text f20 f-medium" data-type="text" data-id="zrzkxxtn4t">Helio
                        P60（MT6771</span>
                    <span data-key="Spec_27" class="xm-text f16 f-regular" data-type="text" data-id="ge085tp0xn">4*Arm
                        Cortex A73 2.1GHz +4*Arm Cortex A53 2.0GHz </span>

                </div>
            </div>
        </div>
        <div class="sectionspe specs05" data-type="bg" data-id="hvs6qs16v3">
            <div class="text-container">
                <div class="left"><span data-key="Spec_29" class="xm-text f28 f-medium" data-type="text"
                        data-id="xqjqlex7ht">RAM + ROM</span>
                </div>
                <div class="right"><span data-key="Spec_30" class="xm-text f16 f-regular" data-type="text"
                        data-id="40epgtk75w">4GB RAM + 128GB ROM <br />256GB expandable memory</span>

                </div>
            </div>
        </div>
        <div class="sectionspe specs07" data-type="bg" data-id="7x1tl01y71">
            <div class="text-container">
                <div class="left">
                    <span data-key="Spec_58" class="xm-text f28 f-medium" data-type="text"
                        data-id="hlcz9ds34p">Battery</span>
                </div>
                <div class="right">
                    <div class="txt">
                        <div class="items item05">
                            <span data-key="Spec_59" class="xm-text f16 f-bold" data-type="text"
                                data-id="hyl9nviz9n">5000mAh </span>
                        </div>
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
                <span data-key="Spec_71" class="xm-text f16 f-regular" data-type="text" data-id="wmne2xj4ls">Front: 25MP
                    FF</span>
                <span data-key="Spec_72" class="xm-text f16 f-regular" data-type="text" data-id="i51m5d1rs8">Rear:
                    48MP+8MP+5MP+0.3MP AF</span>
            </div>
        </div>
    </div>
    <div class="sectionspe specs08" data-type="bg" data-id="i84lzdhfav">
        <div class="text-container">
            <div class="left">
                <span data-key="Spec_98" class="xm-text f28 f-medium" data-type="text"
                    data-id="k6m4mziaks">Sensor</span>
            </div>
            <div class="right">
                <span data-key="Spec_99" class="xm-text f16 f-regular" data-type="text" data-id="6rfi21s1mk">Light
                    sensor</span>
                <span data-key="Spec_100" class="xm-text f16 f-regular" data-type="text" data-id="z3m9lcs9vg">Proximity
                    sensor</span>
                <span data-key="Spec_100" class="xm-text f16 f-regular" data-type="text"
                    data-id="z3m9lcs9vg">G-sensor</span>
                <span data-key="Spec_100" class="xm-text f16 f-regular" data-type="text" data-id="z3m9lcs9vg">Magnetic
                    sensor</span>
            </div>
        </div>
    </div>
    <div class="sectionspe specs09" data-type="bg" data-id="1nudpwtnme">
        <div class="text-container">
            <div class="left">
                <span data-key="Spec_75" class="xm-text f28 f-medium" data-type="text"
                    data-id="85fszad7xq">Fingerprint</span>
            </div>
            <div class="right">
                <span data-key="Spec_76" class="xm-text f16 f-bold" data-type="text" data-id="ioorl0lgb4">Yes</span>

            </div>
        </div>
    </div>
    <div class="sectionspe specs10" data-type="bg" data-id="uc7fkb4nna">
        <div class="text-container">
            <div class="left">
                <span data-key="Spec_82" class="xm-text f28 f-medium" data-type="text"
                    data-id="6v3h7gpr5m">FaceUnlock</span>
            </div>
            <div class="right">
                <span data-key="Spec_83" class="xm-text f16 f-regular" data-type="text" data-id="z6g788h1f0">Yes</span>
            </div>
        </div>
    </div>
    <div class="sectionspe specs11" data-type="bg" data-id="o9oq3txbou">
        <div class="text-container">
            <div class="left">
                <span data-key="Spec_85" class="xm-text f28 f-medium" data-type="text" data-id="02eo47gq2z">OS</span>
            </div>
            <div class="right">
                <span data-key="Spec_86" class="xm-text f16 f-regular" data-type="text" data-id="ccrgamkoyx">Android
                    10.0</span>
            </div>
        </div>
    </div>
    <div class="sectionspe specs12" data-type="bg" data-id="svaq8e5r7x">
        <div class="text-container">
            <div class="left">
                <span data-key="Spec_88" class="xm-text f28 f-medium" data-type="text" data-id="y9zi91sg1h">Color</span>
            </div>
            <div class="right">
                <span data-key="Spec_89" class="xm-text f16 f-regular" data-type="text"
                    data-id="4x6lbs1mau">Black</span>
                <span data-key="Spec_90" class="xm-text f16 f-regular" data-type="text"
                    data-id="r91ezihone">White</span>
                <span data-key="Spec_91" class="xm-text f16 f-regular" data-type="text" data-id="ulw39337q0">Blue</span>
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