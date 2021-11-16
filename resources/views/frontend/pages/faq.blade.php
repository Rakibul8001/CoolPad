@extends('frontend.layouts.master')

@section('title','CoolPad || Blog Page')

@section('main-content')
<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Home &nbsp; /</a></li>
                        <li class="active"><a href="javascript:void(0);">&nbsp; FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->


<section class="privacy-policy-head">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <p class="text2 ">FAQ</p>
            </div>

        </div>
    </div>
</section>


<!--section start-->
<section class="faq-section section-b-space mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="accordion theme-accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0"><button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">1.
                                    Does this phone feature face unlock technology?</button></h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Yes, the Coolpad phone features AI Face unlock with flash screen that works.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">2. Do Coolpad N7 Plus, Cool S and Cool 10 phones have a
                                    fingerprint sensor?</button></h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Yes, the devices are equipped with the advance fingerprint sensor to give you a
                                    hassle free access to your smartphones.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">3. Can I use my wired headphones with the Coolpad
                                    smartphones?</button></h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Yes, Coolpad N7 Air and Cool 10 have a 3.5mm headphone jack. N7 Plus and Cool S have
                                    a Type-C headphone jack, so you can use your earphones/headphones with the phone.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">4. Can I expand storage on Coolpad phones?</button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Coolpad smartphones feature a hybrid micro-SD slot, which means you can expand
                                    storage of N7 Air by 128GB. N7 Plus, Cool S and Cool 10 phones’ storage can be
                                    expanded by 256GB.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">5. What is the screen occupation ratio of the
                                    Phone?</button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>It is an average of 85% screen to body ratio giving you an uninterrupted view.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseSix">6. Does it support OTG?</button></h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Yes, OTG is supported which enables you to connect your phone with multiple
                                    accessories.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading7">
                            <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#heading7" aria-expanded="false"
                                    aria-controls="heading7">7. Can I shoot portrait photos on this phone
                                    camera?</button>
                            </h5>
                        </div>
                        <div id="heading7" class="collapse" aria-labelledby="heading7"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Yes, N7 Plus and Cool S have AI Portrait mode along with multiple photography options
                                    like Beauty Mode, Anti Flicker, Video Shooting and much more.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading8">
                            <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#heading8" aria-expanded="false"
                                    aria-controls="heading8">8. What version of Android operating system do Coolpad
                                    phones run?</button>
                            </h5>
                        </div>
                        <div id="heading8" class="collapse" aria-labelledby="heading8"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Coolpad smartphones run on Android 10.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading9">
                            <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#heading9" aria-expanded="false"
                                    aria-controls="heading9">9. What is the battery life after full charge?</button>
                            </h5>
                        </div>
                        <div id="heading9" class="collapse" aria-labelledby="heading9"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>With a Coolpad battery along with optimized power saving mode you can expect up to a
                                    48hrs of battery life depending on the usage.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading10">
                            <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#heading10" aria-expanded="false"
                                    aria-controls="heading10">10. Can we play high graphics games on Cool S?</button>
                            </h5>
                        </div>
                        <div id="heading10" class="collapse" aria-labelledby="heading10"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Yes, with 4GB RAM and CPU clocked at 2.0 GHz you will have smooth gaming experience.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading11">
                            <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#heading11" aria-expanded="false"
                                    aria-controls="heading11">11. How to Back up & Factory reset your Coolpad
                                    smartphones?</button>
                            </h5>
                        </div>
                        <div id="heading11" class="collapse" aria-labelledby="heading11"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Backup: Go to Settings Option > System > Back up.

                                    Reset to Factory Setting: Go to Settings Option > System > Advanced > Reset Factory
                                    Setting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading12">
                            <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#heading12" aria-expanded="false"
                                    aria-controls="heading12">12. What to do if the phone has accidental water or other
                                    liquid damage?</button>
                            </h5>
                        </div>
                        <div id="heading12" class="collapse" aria-labelledby="heading12"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Take your phone out of the liquid immediately and turn off the phone at once and
                                    remove both the SIM card and SD card. Use a tissue or soft cloth to thoroughly
                                    adsorb water stains or other liquids and gently shake the phone in the opposite
                                    direction of liquid inflow so that the liquid can flow out. Blow-dry the phone with
                                    a fan, then take your phone, warranty card and proof of purchase to a nearby Coolpad
                                    Collection point for repairs at once. DO NOT blow-dry the phone with a hot air hair
                                    dryer to avoid phone firmware damage caused by overheating.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->



@endsection
@push('styles')
<style>
    .pagination {
        display: inline-flex;
    }

    .shop-categories .main-category a {
        transition: color .4s ease;
        font-size: 15px;
        color: #757575;
        margin: 0 18px;
        cursor: default;
        font-weight: 700;
    }

    button.btn,
    input.btn {
        width: 100%;
        height: 60px;
    }

    .btn {
        display: inline-block;
        line-height: 38px;
        padding: 0 0 0 31px;
        text-align: left;
        color: #000;
        background: #fff;
        font-weight: 600;
    }

    .faq-section .accordion.theme-accordion .card .card-header button:before {
        content: "";
        position: absolute;
        width: 0;
        height: 0;
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        border-top: 6px solid #000000;
        right: 20px;
        top: 25px;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    .faq-section .accordion.theme-accordion .card .card-header button[aria-expanded="true"]:before {
        border-top: 0;
        border-bottom: 6px solid #000000;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
</style>

@endpush