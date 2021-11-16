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
            <li class="active"><a href="javascript:void(0);">&nbsp; About Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Breadcrumbs -->


<section class="about-point-head">
  <div class="container">
    <div class="row">
      <div class="col-md-12 align-self-center p-static order-2 text-center">
        <img class="img1" src="frontend/img/year.png" alt="...">
        <p class="text2 mt-2">ALWAYS BELIEVE <br> THAT SOMETHING WONDERFUL<br> IS ABOUT TO HAPPEN</p>
      </div>


    </div>
  </div>
</section>



<div class="container session01">
  <img src="frontend/img/logo_about.png">
  <div>
    <h3>OUR LOGO</h3>
    <p>Coolpad is a young, innovative leading global smartphone brand that leverages its competitive advantages of R and
      D and manufacturing to advance in all walks of life. Leading with a customer-centric model, everything we do in
      science and technology innovation must relate back to the essence of the brand’s passion, vigor, and personality
      of the people we serve.</p>
  </div>
</div>


<div class="session02">
  <h3>MAKING QUALITY TECHNOLOGY<br>ACCESSIBLE TO EVERYONE.</h3>
  <p>Coolpad Group (Hong Kong Main Board listed company, stock code 2369), founded in April 1993, is a global
    professional pan-smart terminal manufacturer and service provider, and a pioneer of wireless data integration with
    intelligent communication technology as its core.
    Based in Shenzhen, china, coolpad has R & D centers and R & D teams in the US, Hong Kong, and Nanjing. Moreover, in
    addition to Dongguan, Coolpad also has Coolpad production plants in Vietnam.
    Over the years, Coolpad has focused on R & D and innovation, and has a solid intellectual property strength. As of
    now, Coolpad's total global patent </br>
    Based in Shenzhen, china, coolpad has R & D centers and R & D teams in the US, Hong Kong, and Nanjing. Moreover, in
    addition to Dongguan, Coolpad also has Coolpad production plants in Vietnam. </br>
    Over the years, Coolpad has focused on R & D and innovation, and has a solid intellectual property strength. As of
    now, Coolpad's total global patent reserve exceeds 13,000. Among them, the world's first dual-card dual-standby
    technology has won the "National Second Prize for Scientific and Technological Progress", which is by far the
    highest award in the field of mobile phone terminal technology in China. </p>
  <div>
    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>

    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>

    <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
  </div>
</div>




<div class="session03">
  <p>MAKING QUALITY TECHNOLOGY<br>ACCESSIBLE TO EVERYONE.</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <img src="{{ asset('frontend/img/management.jpeg') }}" alt="management pics">
    </div>
  </div>
</div>


<div class="session05" id="culture">
  <h3>OUR CULTURE</h3>
  <p>At present, the Coolpad Group's business covers multiple pan-smart terminal fields such as smartphones, watches,
    trackers, and accessories. It cooperates with China Mobile, American MetroPcs, Sprint, Qualcomm and other well-known
    companies at home and abroad have established long-term cooperative relationships; In the future, Cool Group will
    rely on global advanced technological innovation and excellent operating capabilities, continue to invest in
    research and development, continue to enrich product categories and enhance product competitiveness, with the
    mission of "technology to promote progress, empower a better life", return to the original heart, based on
    innovation Quality is the top priority, ingenuity creates the soul, comprehensive development of smart wear, smart
    home, smart city and other business sectors, and is committed to becoming a "first-class world-class enterprise."
  </p>
  <div class="clearfix">
    <dl>
      <img src="frontend/img/fgvsgdh.jpg">
    </dl>
    <dl>
      <img src="frontend/img/dvdv.jpg">
    </dl>
  </div>
</div>


<div id="global">
  <h3>GLOBAL BIG EVENTS</h3>
  <div>

    <div class="container">
      <div class="row mt-5">
        <div class="col-md-3 offset-2">
          <ul>
            <li>Stable investment in branding</li>
            <li>5 Global big events a year</li>
            <li>Continuous new products and campus activities</li>
            <li>Coolpad Global Trip</li>
            <li>Boys & girls club</li>
            <li>Summer Snow Day</li>
            <li>Festival</li>
          </ul>
        </div>
        <div class="col-md-3 offset-2">
          <ul>
            <li>Christmas</li>
            <li>Make Coolpad mascot a big IP</li>
            <li>Activity for teenagers</li>
            <li>A cool summer carnival worldwide</li>
            <li>Global promotion </li>
            <li>Global celebration activity in significant holiday</li>
          </ul>
        </div>
      </div>
    </div>


    <div class="xm-about-careers" id="career">
      <div class="container">
        <h3>CAREERS</h3>
        <p>CoolPad is focused on being the most user-centric mobile internet company, and we aim <br>to constantly
          exceed expectations through innovations in software, hardware and services. <br>Many of our employees were
          initially fans of CoolPad products, before they decided to join us. Our team is <br>not only passionate about
          technology, but also relentlessly pursues perfection to break tradition and <br>push boundaries, all just to
          ensure that our products remain unique and offer an unparalleled user<br> experience. CoolPad is headquartered
          in Beijing, China and has offices<br> in Asia-Pacific, India, and Brazil.</p>
        <a href="" target="_blank"><span><i class="fa fa-linkedin"></i></span>VIEW ALL POSITIONS</a>
      </div>
    </div>


    @endsection
    @push('styles')
    <style>
      #global.row {
        margin-left: 208px;
        margin-top: 25px;
      }

      #global {
        text-align: center;
        padding-top: 25px;

      }

      #global li {
        text-align: left;

      }

      .session03 {
        margin: 59px 0 50px;
        text-align: center;
        color: #616161;
      }

      .session02 p {
        font-size: 16px;
        line-height: 28px;
        margin-top: 36px;
        color: #fff;
        margin-left: 20%;
        margin-right: 20%;
        text-align: justify;

      }

      .session05 p {
        margin-left: 20%;
        margin-right: 20%;
        text-align: justify;

      }

      .shop-categories .main-category a {
        transition: color .4s ease;
        font-size: 15px;
        color: #757575;
        margin: 0 18px;
        cursor: default;
        font-weight: 700;
      }

      .session01 div p {
        font-size: 16px;
        line-height: 28px;
        text-align: justify !important;
      }
    </style>

    @endpush

    {{-- Google Map --}}
    {{-- @push('scripts')
    <script src="https://maps.googleapis.com/maps/api/js" async defer></script>

    <script>
      function initMap() {}
    </script>
    @endpush --}}