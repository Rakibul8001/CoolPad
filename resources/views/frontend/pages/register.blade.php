<!DOCTYPE html>
<html lang="en">
<head>
  <title>CoolPad || Register Page</title>
  @include('backend.layouts.head')

</head>

<body class="bg-gradient-primary2">
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center sigin-cart">
      <a href="{{route('home')}}">
        <div class="signin-logo">
                <img src="{{ asset('frontend/img/logo@2x.png') }}" alt="">
        </div>
      </a>
      <div class="col-md-12">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
             
              <div class="col-lg-5">   
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-10  text-center p-0 mt-3 mb-2">
                            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                <h2 id="heading">Create Account </h2>
                            
                                <form id="msform" method="post" action="{{route('register.submit')}}">
                                  @csrf
                                    <!-- progressbar -->
                                    <ul id="progressbar">
                                        <li class="active" id="account"><strong>Personal Info</strong></li>
                                        <li id="personal"><strong>Account Details</strong></li>                 
                                    </ul>
                                    <!-- fieldsets -->
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row"> 
                                                </div> 
                                                    <label class="fieldlabels">Full Name: *</label> 
                                                    <input type="text" name="name" placeholder="Full Name" required="required" value="{{old('name')}}" /> 
                                                    <label class="fieldlabels">Town / City: *</label> <input type="text" name="" placeholder="Town / City" /> 
                                                    <label class="fieldlabels">Billing Address: *</label> <input type="text" name="" placeholder="Billing Address" /> 
                                                    <label class="fieldlabels">Delivery Address : </label> <input type="text" name="" placeholder="Delivery Address" />                                                             
                                                </div> 
                                        <input type="button" name="next" class="next action-button" value="Next" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">                                
                                            </div> 
                                            <label class="fieldlabels">Email: *</label> 
                                            <input type="text" placeholder="Email" name="email" required="required" value="{{old('email')}}" />

                                            <label class="fieldlabels">Contact No.: *</label> <input type="text" name="" placeholder="Contact No." /> 

                                            <label class="fieldlabels">Password: *</label> <input type="password" placeholder="Password"  name="password" required="required" value="{{old('password')}}" />
                                            
                                            <label class="fieldlabels">Confirm Password: *</label> <input type="password" placeholder="Confirm Password" name="password_confirmation" required="required" value="{{old('password_confirmation')}}" />                                                    
                                        </div> 
                                        <input type="submit" class="next action-button" value="Submit" />
                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    </fieldset>                  
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">                              
                                            </div> <br><br>
                                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> 
                                            <br><br>
                                            <div class="row justify-content-center">
                                                <div class="col-7 text-center">
                                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                                <div class="text-center">
                                    <p>Already have an account?<a class="btn btn-link small" href="{{route('login.form')}}">Sign In</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
              </div> 
              <!-- emd col-6 -->

              <div class="col-lg-7 d-none d-lg-block bg-signup-image2"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="text-center mb-5">
        <p>I've read and agreed to CoolPad <a class="btn btn-link small" href=" ">User Agreement</a> and<a class="btn btn-link small" href=" ">Privacy Policy</a></p>
    </div>

  @include('backend.layouts.footer')

</body>

</html>
