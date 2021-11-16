@extends('frontend.layouts.master')

@section('title','CoolPad || Product List')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home &nbsp; /</a></li>
                            <li class="active"><a href="javascript:void(0);">&nbsp; Product List</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->


    <div class="container J_category category-index">
<div class="xm-plain-box category-list" id="1">
  <div class="box-hd J_box-hd">
    <h2 class="title"><i class="iconfont"></i>Smart Phones</h2>
  </div>
  <div class="box-bd J_box-bd">
  <ul class="clearfix">
  <li class="category-list-product" data-ot-info="{&quot;d&quot;:&quot;0&quot;, &quot;productId&quot;:&quot;&quot;, &quot;elementTitle&quot;:&quot;Mi 11X&quot;,&quot;linkUrl&quot;:&quot;https://www.mi.com/bd/mi-11x/&quot;, &quot;assetLink&quot;:&quot;https://i02.appmifile.com/55_operator_in/27/05/2021/252a712653dce0ebe5e8c27ba73948ee.png&quot;}">
    <a href="{{ route('cools-index') }}" class="category-list-img onetrack-btn" data-stat-id="31ebd2916585feea" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-31ebd2916585feea', 'https://www.mi.com/bd/mi-11x/', 'pcpid']);">
      <img alt="Mi 11X" src="{{ asset('frontend/img/cools.png') }}">
    </a>
    <a href="{{ route('cools-index') }}" class="category-list-title onetrack-btn" data-stat-id="7ea401a426a4953d" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-7ea401a426a4953d', 'https://www.mi.com/bd/mi-11x/', 'pcpid']);">
      Cool S</a>
  </li>
  <li class="category-list-product" data-ot-info="{&quot;d&quot;:&quot;1&quot;, &quot;productId&quot;:&quot;&quot;, &quot;elementTitle&quot;:&quot;Redmi Note 10 Pro Max&quot;,&quot;linkUrl&quot;:&quot;https://www.mi.com/bd/redmi-note-10-pro-max&quot;, &quot;assetLink&quot;:&quot;https://i02.appmifile.com/159_operator_in/01/06/2021/b14084cb65bbaea2b383cf6eda56f79c.png&quot;}">
    <a href="{{ route('n7plus-index') }}" class="category-list-img onetrack-btn" data-stat-id="39bec3cd41640c0c" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-39bec3cd41640c0c', 'https://www.mi.com/bd/redmi-note-10-pro-max', 'pcpid']);">
      <img alt="Redmi Note 10 Pro Max" src="{{ asset('frontend/img/n7plus.png') }}">
    </a>
    <a href="{{ route('n7plus-index') }}" class="category-list-title onetrack-btn" data-stat-id="9aac798614b9f195" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-9aac798614b9f195', 'https://www.mi.com/bd/redmi-note-10-pro-max', 'pcpid']);">
      Cool N7 Plus</a>
  </li>
  <li class="category-list-product" data-ot-info="{&quot;d&quot;:&quot;2&quot;, &quot;productId&quot;:&quot;&quot;, &quot;elementTitle&quot;:&quot;Redmi Note 10 Pro&quot;,&quot;linkUrl&quot;:&quot;https://www.mi.com/bd/redmi-note-10-pro&quot;, &quot;assetLink&quot;:&quot;https://i02.appmifile.com/282_operator_in/18/03/2021/3a51e75fc01b23fb25ba0eb365569061.png&quot;}">
    <a href="{{ route('n7air-index') }}" class="category-list-img onetrack-btn" data-stat-id="38d84adff45a95c3" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-38d84adff45a95c3', 'https://www.mi.com/bd/redmi-note-10-pro', 'pcpid']);">
      <img alt="Redmi Note 10 Pro" src="{{ asset('frontend/img/n7air.png') }}">
    </a>
    <a href="{{ route('n7air-index') }}" class="category-list-title onetrack-btn" data-stat-id="44e1f387db7f5053" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-44e1f387db7f5053', 'https://www.mi.com/bd/redmi-note-10-pro', 'pcpid']);">
      Cool N7 Air</a>
  </li>



</ul>  </div>
</div>

    <div class="xm-plain-box category-list" id="2">
      <div class="box-hd J_box-hd">
        <h2 class="title"><i class="iconfont"></i>Accessories</h2>
      </div>
      <div class="box-bd J_box-bd">

      <ul class="clearfix">

  <li class="category-list-product" data-ot-info="{&quot;d&quot;:&quot;1&quot;, &quot;productId&quot;:&quot;&quot;, &quot;elementTitle&quot;:&quot;Redmi Note 10 Pro Max&quot;,&quot;linkUrl&quot;:&quot;https://www.mi.com/bd/redmi-note-10-pro-max&quot;, &quot;assetLink&quot;:&quot;https://i02.appmifile.com/159_operator_in/01/06/2021/b14084cb65bbaea2b383cf6eda56f79c.png&quot;}">
    <a href="{{ route('coolbuds-t1') }}" class="category-list-img onetrack-btn" data-stat-id="39bec3cd41640c0c" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-39bec3cd41640c0c', 'https://www.mi.com/bd/redmi-note-10-pro-max', 'pcpid']);">
      <img alt="Redmi Note 10 Pro Max" src="{{ asset('frontend/img/accessories/Coolpad-coolbuds-T1.png') }}">
    </a>
    <a href="{{ route('coolbuds-t1') }}" class="category-list-title onetrack-btn" data-stat-id="9aac798614b9f195" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-9aac798614b9f195', 'https://www.mi.com/bd/redmi-note-10-pro-max', 'pcpid']);">
      Coolpad coolbuds T1
    </a>
  </li>
  <li class="category-list-product" data-ot-info="{&quot;d&quot;:&quot;2&quot;, &quot;productId&quot;:&quot;&quot;, &quot;elementTitle&quot;:&quot;Redmi Note 10 Pro&quot;,&quot;linkUrl&quot;:&quot;https://www.mi.com/bd/redmi-note-10-pro&quot;, &quot;assetLink&quot;:&quot;https://i02.appmifile.com/282_operator_in/18/03/2021/3a51e75fc01b23fb25ba0eb365569061.png&quot;}">
    <a href="{{ route('coolbuds-t2') }}" class="category-list-img onetrack-btn" data-stat-id="38d84adff45a95c3" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-38d84adff45a95c3', 'https://www.mi.com/bd/redmi-note-10-pro', 'pcpid']);">
      <img alt="Redmi Note 10 Pro" src="{{ asset('frontend/img/accessories/Coolpad-coolbuds-T2-.png') }}">
    </a>
    <a href="{{ route('coolbuds-t2') }}" class="category-list-title onetrack-btn" data-stat-id="44e1f387db7f5053" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-44e1f387db7f5053', 'https://www.mi.com/bd/redmi-note-10-pro', 'pcpid']);">
      Coolpad coolbuds T2 
    </a>
  </li>
  <li class="category-list-product" data-ot-info="{&quot;d&quot;:&quot;3&quot;, &quot;productId&quot;:&quot;&quot;, &quot;elementTitle&quot;:&quot;Redmi Note 10 Pro 64MP Camera Edition&quot;,&quot;linkUrl&quot;:&quot;https://www.mi.com/bd/redmi-note-10-pro-64mp&quot;, &quot;assetLink&quot;:&quot;https://i02.appmifile.com/344_operator_in/11/05/2021/8f630693d538dd92bd5f76832f4a3d5a.png&quot;}">
    <a href="{{ route('coolbuds-x') }}" class="category-list-img onetrack-btn" data-stat-id="818723b40dc37903" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-818723b40dc37903', 'https://www.mi.com/bd/redmi-note-10-pro-64mp', 'pcpid']);">
      <img alt="Redmi Note 10 Pro 64MP Camera Edition" src="{{ asset('frontend/img/accessories/Coolpad-coolbuds-X.png') }}">
    </a>
    <a href="{{ route('coolbuds-x') }}" class="category-list-title onetrack-btn" data-stat-id="77fbd31ed1448501" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-77fbd31ed1448501', 'https://www.mi.com/bd/redmi-note-10-pro-64mp', 'pcpid']);">
      Coolpad coolbuds X
    </a>
  </li>
  <li class="category-list-product" data-ot-info="{&quot;d&quot;:&quot;1&quot;, &quot;productId&quot;:&quot;&quot;, &quot;elementTitle&quot;:&quot;Redmi Note 10 Pro Max&quot;,&quot;linkUrl&quot;:&quot;https://www.mi.com/bd/redmi-note-10-pro-max&quot;, &quot;assetLink&quot;:&quot;https://i02.appmifile.com/159_operator_in/01/06/2021/b14084cb65bbaea2b383cf6eda56f79c.png&quot;}">
    <a href="{{ route('cool-watch') }}" class="category-list-img onetrack-btn" data-stat-id="39bec3cd41640c0c" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-39bec3cd41640c0c', 'https://www.mi.com/bd/redmi-note-10-pro-max', 'pcpid']);">
      <img alt="Redmi Note 10 Pro Max" src="{{ asset('frontend/img/accessories/Coolpad-Cool-watch-1.png') }}">
    </a>
    <a href="{{ route('cool-watch') }}" class="category-list-title onetrack-btn" data-stat-id="9aac798614b9f195" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-9aac798614b9f195', 'https://www.mi.com/bd/redmi-note-10-pro-max', 'pcpid']);">
      Coolpad Cool watch 1
    </a>
  </li>
  <li class="category-list-product" data-ot-info="{&quot;d&quot;:&quot;2&quot;, &quot;productId&quot;:&quot;&quot;, &quot;elementTitle&quot;:&quot;Redmi Note 10 Pro&quot;,&quot;linkUrl&quot;:&quot;https://www.mi.com/bd/redmi-note-10-pro&quot;, &quot;assetLink&quot;:&quot;https://i02.appmifile.com/282_operator_in/18/03/2021/3a51e75fc01b23fb25ba0eb365569061.png&quot;}">
    <a href="{{ route('cool-watch-1s') }}" class="category-list-img onetrack-btn" data-stat-id="38d84adff45a95c3" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-38d84adff45a95c3', 'https://www.mi.com/bd/redmi-note-10-pro', 'pcpid']);">
      <img alt="Redmi Note 10 Pro" src="{{ asset('frontend/img/accessories/Coolpad-Cool-watch-1S.png') }}">
    </a>
    <a href="{{ route('cool-watch-1s') }}" class="category-list-title onetrack-btn" data-stat-id="44e1f387db7f5053" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-44e1f387db7f5053', 'https://www.mi.com/bd/redmi-note-10-pro', 'pcpid']);">
      Coolpad Cool watch 1S
    </a>
  </li>
  <li class="category-list-product" data-ot-info="{&quot;d&quot;:&quot;0&quot;, &quot;productId&quot;:&quot;&quot;, &quot;elementTitle&quot;:&quot;Mi 11X&quot;,&quot;linkUrl&quot;:&quot;https://www.mi.com/bd/mi-11x/&quot;, &quot;assetLink&quot;:&quot;https://i02.appmifile.com/55_operator_in/27/05/2021/252a712653dce0ebe5e8c27ba73948ee.png&quot;}">
    <a href="{{ route('coolpad-mifi') }}" class="category-list-img onetrack-btn" data-stat-id="31ebd2916585feea" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-31ebd2916585feea', 'https://www.mi.com/bd/mi-11x/', 'pcpid']);">
      <img alt="Mi 11X" src="{{ asset('frontend/img/accessories/coolpad-MiFi_CMF01.png') }}">
    </a>
    <a href="{{ route('coolpad-mifi') }}" class="category-list-title onetrack-btn" data-stat-id="7ea401a426a4953d" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-7ea401a426a4953d', 'https://www.mi.com/bd/mi-11x/', 'pcpid']);">
      coolpad MiFi_CMF01
    </a>
  </li>
  <li class="category-list-product" data-ot-info="{&quot;d&quot;:&quot;0&quot;, &quot;productId&quot;:&quot;&quot;, &quot;elementTitle&quot;:&quot;Mi 11X&quot;,&quot;linkUrl&quot;:&quot;https://www.mi.com/bd/mi-11x/&quot;, &quot;assetLink&quot;:&quot;https://i02.appmifile.com/55_operator_in/27/05/2021/252a712653dce0ebe5e8c27ba73948ee.png&quot;}">
    <a href="{{ route('coolpad-mifi-02') }}" class="category-list-img onetrack-btn" data-stat-id="31ebd2916585feea" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-31ebd2916585feea', 'https://www.mi.com/bd/mi-11x/', 'pcpid']);">
      <img alt="Mi 11X" src="{{ asset('frontend/img/accessories/coolpad-MiFi_CMF02.jpg') }}">
    </a>
    <a href="{{ route('coolpad-mifi-02') }}" class="category-list-title onetrack-btn" data-stat-id="7ea401a426a4953d" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-7ea401a426a4953d', 'https://www.mi.com/bd/mi-11x/', 'pcpid']);">
      coolpad MiFi_CMF02
    </a>
  </li>
  <li class="category-list-product" data-ot-info="{&quot;d&quot;:&quot;1&quot;, &quot;productId&quot;:&quot;&quot;, &quot;elementTitle&quot;:&quot;Redmi Note 10 Pro Max&quot;,&quot;linkUrl&quot;:&quot;https://www.mi.com/bd/redmi-note-10-pro-max&quot;, &quot;assetLink&quot;:&quot;https://i02.appmifile.com/159_operator_in/01/06/2021/b14084cb65bbaea2b383cf6eda56f79c.png&quot;}">
    <a href="{{ route('powerbank') }}" class="category-list-img onetrack-btn" data-stat-id="39bec3cd41640c0c" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-39bec3cd41640c0c', 'https://www.mi.com/bd/redmi-note-10-pro-max', 'pcpid']);">
      <img alt="Redmi Note 10 Pro Max" src="{{ asset('frontend/img/accessories/Coolpad-Power-Bank.png') }}">
    </a>
    <a href="{{ route('powerbank') }}" class="category-list-title onetrack-btn" data-stat-id="9aac798614b9f195" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-9aac798614b9f195', 'https://www.mi.com/bd/redmi-note-10-pro-max', 'pcpid']);">
      Coolpad Power Bank</a>
  </li>
  <li class="category-list-product" data-ot-info="{&quot;d&quot;:&quot;3&quot;, &quot;productId&quot;:&quot;&quot;, &quot;elementTitle&quot;:&quot;Redmi Note 10 Pro 64MP Camera Edition&quot;,&quot;linkUrl&quot;:&quot;https://www.mi.com/bd/redmi-note-10-pro-64mp&quot;, &quot;assetLink&quot;:&quot;https://i02.appmifile.com/344_operator_in/11/05/2021/8f630693d538dd92bd5f76832f4a3d5a.png&quot;}">
    <a href="{{ route('cool-router') }}" class="category-list-img onetrack-btn" data-stat-id="818723b40dc37903" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-818723b40dc37903', 'https://www.mi.com/bd/redmi-note-10-pro-64mp', 'pcpid']);">
      <img alt="Redmi Note 10 Pro 64MP Camera Edition" src="{{ asset('frontend/img/accessories/coolpad-Router_CRT01.png') }}">
    </a>
    <a href="{{ route('cool-router') }}" class="category-list-title onetrack-btn" data-stat-id="77fbd31ed1448501" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-77fbd31ed1448501', 'https://www.mi.com/bd/redmi-note-10-pro-64mp', 'pcpid']);">
      coolpad Router_CRT01
    </a>
  </li>
  <li class="category-list-product" data-ot-info="{&quot;d&quot;:&quot;3&quot;, &quot;productId&quot;:&quot;&quot;, &quot;elementTitle&quot;:&quot;Redmi Note 10 Pro 64MP Camera Edition&quot;,&quot;linkUrl&quot;:&quot;https://www.mi.com/bd/redmi-note-10-pro-64mp&quot;, &quot;assetLink&quot;:&quot;https://i02.appmifile.com/344_operator_in/11/05/2021/8f630693d538dd92bd5f76832f4a3d5a.png&quot;}">
    <a href="{{ route('cool-ups') }}" class="category-list-img onetrack-btn" data-stat-id="818723b40dc37903" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-818723b40dc37903', 'https://www.mi.com/bd/redmi-note-10-pro-64mp', 'pcpid']);">
      <img alt="Redmi Note 10 Pro 64MP Camera Edition" src="{{ asset('frontend/img/accessories/ups.png') }}">
    </a>
    <a href="{{ route('cool-ups') }}" class="category-list-title onetrack-btn" data-stat-id="77fbd31ed1448501" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-77fbd31ed1448501', 'https://www.mi.com/bd/redmi-note-10-pro-64mp', 'pcpid']);">
      UPS
    </a>
  </li>
  <li class="category-list-product" data-ot-info="{&quot;d&quot;:&quot;3&quot;, &quot;productId&quot;:&quot;&quot;, &quot;elementTitle&quot;:&quot;Redmi Note 10 Pro 64MP Camera Edition&quot;,&quot;linkUrl&quot;:&quot;https://www.mi.com/bd/redmi-note-10-pro-64mp&quot;, &quot;assetLink&quot;:&quot;https://i02.appmifile.com/344_operator_in/11/05/2021/8f630693d538dd92bd5f76832f4a3d5a.png&quot;}">
    <a href="{{ route('hub-100') }}" class="category-list-img onetrack-btn" data-stat-id="818723b40dc37903" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-818723b40dc37903', 'https://www.mi.com/bd/redmi-note-10-pro-64mp', 'pcpid']);">
      <img alt="Redmi Note 10 Pro 64MP Camera Edition" src="{{ asset('frontend/img/accessories/Cool-HUB-100.jpg') }}">
    </a>
    <a href="{{ route('hub-100') }}" class="category-list-title onetrack-btn" data-stat-id="77fbd31ed1448501" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-77fbd31ed1448501', 'https://www.mi.com/bd/redmi-note-10-pro-64mp', 'pcpid']);">
      Cool HUB-100
    </a>
  </li>
  <li class="category-list-product" data-ot-info="{&quot;d&quot;:&quot;3&quot;, &quot;productId&quot;:&quot;&quot;, &quot;elementTitle&quot;:&quot;Redmi Note 10 Pro 64MP Camera Edition&quot;,&quot;linkUrl&quot;:&quot;https://www.mi.com/bd/redmi-note-10-pro-64mp&quot;, &quot;assetLink&quot;:&quot;https://i02.appmifile.com/344_operator_in/11/05/2021/8f630693d538dd92bd5f76832f4a3d5a.png&quot;}">
    <a href="{{ route('hub-300') }}" class="category-list-img onetrack-btn" data-stat-id="818723b40dc37903" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-818723b40dc37903', 'https://www.mi.com/bd/redmi-note-10-pro-64mp', 'pcpid']);">
      <img alt="Redmi Note 10 Pro 64MP Camera Edition" src="{{ asset('frontend/img/accessories/Cool-HUB-300.jpg') }}">
    </a>
    <a href="{{ route('hub-300') }}" class="category-list-title onetrack-btn" data-stat-id="77fbd31ed1448501" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-77fbd31ed1448501', 'https://www.mi.com/bd/redmi-note-10-pro-64mp', 'pcpid']);">
      Cool HUB-300
    </a>
  </li>

  <li class="category-list-product" data-ot-info="{&quot;d&quot;:&quot;0&quot;, &quot;productId&quot;:&quot;&quot;, &quot;elementTitle&quot;:&quot;Mi 11X&quot;,&quot;linkUrl&quot;:&quot;https://www.mi.com/bd/mi-11x/&quot;, &quot;assetLink&quot;:&quot;https://i02.appmifile.com/55_operator_in/27/05/2021/252a712653dce0ebe5e8c27ba73948ee.png&quot;}">
    <a href="{{ route('hub-800') }}" class="category-list-img onetrack-btn" data-stat-id="31ebd2916585feea" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-31ebd2916585feea', 'https://www.mi.com/bd/mi-11x/', 'pcpid']);">
      <img alt="Mi 11X" src="{{ asset('frontend/img/accessories/Cool-HUB-800.png') }}">
    </a>
    <a href="{{ route('hub-800') }}" class="category-list-title onetrack-btn" data-stat-id="7ea401a426a4953d" onclick="_msq.push(['trackEvent', '50ecfa1eb5600e0d-7ea401a426a4953d', 'https://www.mi.com/bd/mi-11x/', 'pcpid']);">
      Cool HUB-800
    </a>
  </li>
  
</ul>

      </div>
   </div>

</div>

@endsection
@push('styles')

    <style>
      .breadcrumbs {
    height: 54px;
    font-size: 12px;
    line-height: 0;
    background: #f5f5f5;
    color: #616161;
}

.breadcrumbs a {
    color: #757575
}

    body {
            background-color: #fff
        } 

     a:hover {
    color: #3a3fb5;
    text-decoration: none;
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