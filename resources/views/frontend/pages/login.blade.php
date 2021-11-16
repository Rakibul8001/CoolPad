<!DOCTYPE html>
<html lang="en">

<head>
  <title>CoolPad || Login Page</title>
  @include('backend.layouts.head')

</head>

<body class="bg-gradient-primary2">
    <!-- nav -->
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand pt-3" href="{{route('home')}}">
          <img src="{{ asset('frontend/img/signuplogo.png') }}" width="233" height="48" class="d-inline-block align-top" alt="">   
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
        <form class=" navbar-nav form-inline my-2 my-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('agreement') }}"> <b>User Agreement </b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('privacy') }}"><b>Privacy Policy</b></a>
          </li>      
        </form>
      </div>
    </nav>
    <!--end  nav -->

    <!-- Outer Row -->
    <div class="row justify-content-center login-cart">

      <div class="col-xl-10 col-lg-12 col-md-9 mt-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image2"></div>
              <div class="col-lg-6">
                  <div class="login-logo">
                      <img src="{{ asset('frontend/img/logo@2x.png') }}" alt="">
                  </div>
                <div class="p-5">
                  <div class="">
                    <h1 class="h4 text-gray-900 mb-4">Sign In</h1>
                  </div>
                  <form method="POST" action="{{route('login.submit')}}">
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                      <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..."  required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                      <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password"  name="password" required autocomplete="current-password">
                         @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                    </div>
                    <div>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link small" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary btn-user2 btn-block">
                      Login
                    </button>
                  </form>
                    <div class="text-center">
                        <p>Haven't any account? <a class="btn btn-link small" href="{{route('register.form')}}">Sign Up</a></p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</body>

</html>
