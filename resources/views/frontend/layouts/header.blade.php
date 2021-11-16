 <div class="entry-board J_entryBoard" data-ot-module="1">
    <div class="container">
      <ul class="external-entries">
        <li class="entry "><a href="#">CoolPad Bangladesh</a></li>
        <li class="entry "><a href="#">CoolPad Community</a></li>
      </ul>
      <div class="account-info mini">
        <div class="sign-entries" id="J_signEntries">
          <ul>
            @auth 
            @if(Auth::user()->role=='admin')
            <li class="entry">
              <a href="{{route('admin')}}">Dashboard</a>
            </li>
            @else
            <li class="entry">
              <a href="{{route('user')}}">Dashboard</a>
            </li>
            @endif
            <li class="entry">
              <a href="{{route('user.logout')}}">Logout</a>
            </li>
            @else
            <li class="entry">
              <a href="{{route('login.form')}}">Sign in</a>
            </li>
            <li class="entry">
              <a href="{{route('register.form')}}">Sign up</a>
            </li>
            @endauth
          </ul>
        </div>
   
      </div>
    </div>
  </div>

  <nav class="site-navigation" data-ot-module="1">
    <div id="J_curtain" class="curtain index">
      <div class="container">
        <div class="milogo">
          <div class="milogo-wrapper">
            <a href="{{route('home')}}">
             <img src="{{ asset('frontend/img/headlogo.png') }}" />
            </a>
          </div>

        </div>
        <div id="J_shopCategories" class="shop-categories c-white">
          <div class="categories-wrapper">
            <dl>
              <dt class="main-category">
                <a href="{{route('home')}}">Home</a>
              </dt>
            </dl>

            <dl>
              <dt class="main-category">
                <a>Smart Phones</a>
              </dt>
              <dd class="products-exhibit" style="display: none;">
                <div class="container products-exhibit-wrapper">
                  <div class="main-product">
                    <a class="product-image" href="{{ route('cools-index') }}" >
                      <img
                        src="{{ asset('frontend/img/cools.png') }}"
                        alt="Redmi Note 10 Pro Max" width="140" height="140">
                    </a>
                    <a class="product-name" href="{{ route('cools-index') }}">Cool S</a>
                    <span class="product-price">৳ 28,999</span>
                  </div>
                  <div class="main-product">
                    <a class="product-image" href="{{ route('n7plus-index') }}">
                      <img
                        src="{{ asset('frontend/img/n7plus.png') }}"
                        alt="N7 Plus" width="140" height="140">
                    </a>
                    <a class="product-name" href="{{ route('n7plus-index') }}">N7 Plus</a>
                    <span class="product-price">From ৳ 26,999</span>
                  </div>
                  <div class="main-product">
                    <a class="product-image" href="{{ route('n7air-index') }}">
                      <img
                        src="{{ asset('frontend/img/n7air.png') }}"
                        alt="N7 Plus" width="140" height="140">
                    </a>
                    <a class="product-name" href="{{ route('n7air-index') }}">N7 Air</a>
                    <span class="product-price">From ৳ 19,999</span>
                  </div>

                </div>
              </dd>
            </dl>
            <dl>
              <dt class="main-category">
                <a>Accessories</a>
              </dt>
              <dd class="products-exhibit">
                <div class="container products-exhibit-wrapper">
                  <div class="main-product">
                    <a class="product-image" href="{{ route('hub-800') }}">
                      <img src="{{ asset('frontend/img/accessories/Cool-HUB-800.png') }}">
                    </a>
                    <a class="product-name" href="{{ route('hub-800') }}">Cool Hub-800</a>
                    <span class="product-price">From ৳ 29,999 </span>
                  </div>
                  <div class="main-product">
                    <a class="product-image" href="{{ route('coolbuds-t1') }}">
                      <img src="{{ asset('frontend/img/accessories/Coolpad-coolbuds-T1.png') }}">
                    </a>
                    <a class="product-name" href="{{ route('coolbuds-t1') }}">Coolbuds T1</a>
                    <span class="product-price">From ৳ 25,999</span>
                  </div>
                  <div class="main-product">
                    <a class="product-image" href="{{ route('coolbuds-t2') }}">
                      <img src="{{ asset('frontend/img/accessories/Coolpad-coolbuds-T2-.png') }}">
                    </a>
                    <a class="product-name" href="{{ route('coolbuds-t2') }}">CoolBuds T2</a>
                    <span class="product-price">From ৳ 29,999 </span>
                  </div>
                  <div class="main-product">
                    <a class="product-image" href="{{ route('coolbuds-x') }}">
                      <img src="{{ asset('frontend/img/accessories/Coolpad-coolbuds-X.png') }}">
                    </a>
                    <a class="product-name" href="{{ route('coolbuds-x') }}">Coolbuds X</a>
                    <span class="product-price">From ৳ 25,999</span>
                  </div>
                  <div class="main-product">
                    <a class="product-image" href="{{ route('cool-watch') }}">
                      <img src="{{ asset('frontend/img/accessories/Coolpad-Cool-watch-1.png') }}">
                    </a>
                    <a class="product-name" href="{{ route('cool-watch') }}">Coolpad Cool watch</a>
                    <span class="product-price">From ৳ 29,999 </span>
                  </div>

                  <div class="main-product">
                    <a class="product-image" href="{{route('product-list-page')}}">
                      <img
                        src="{{ asset('frontend/img/mi-more.png') }}"                    
                        alt="View More" width="140" height="140">
                    </a>
                    <a class="product-name" href="{{route('product-list-page')}}">View More</a>
                    <span class="product-price"></span>
                  </div>
 
                </div>
              </dd>
            </dl>

            <dl>
              <dt class="main-category">
                <a href="{{ route('about-us') }}">About</a>
              </dt>
            </dl>
            <dl>
              <dt class="main-category">
                <a href="{{route('product-grids')}}">Shop</a>
              </dt>
            </dl>
            <dl>
              <dt class="main-category">
                <a href="{{route('service-point')}}">Service Partner</a>
              </dt>
            </dl>


          </div>
        </div>

      </div>
    </div>

  </nav>


