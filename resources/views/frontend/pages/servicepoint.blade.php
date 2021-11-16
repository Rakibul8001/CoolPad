@extends('frontend.layouts.master')

@section('title','CoolPad || Service Partner')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home &nbsp; /</a></li>
                            <li class="active"><a href="javascript:void(0);">&nbsp; Service Partners</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->


<section class="service-point-head">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
            <h1 class="font-weight-bold text1">AUTHORIZED Service PARTNER</h1>
            <h5 class="font-weight-bold text2">Find a Coolpad AUTHORIZED service PARTNER near you</h5>
        </div>
    </div>
</section>

<div class="container">

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="status" class="col-form-label"></label>
              <select name="division" class="form-control select1" id="division_id">
                  <option value="0" selected disabled>Select Division</option>
                  @foreach ($divisions as $division)
                 <option value="{{ $division->id }}">{{ $division->name }}</option>  
                  @endforeach
              </select>
    
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="form-group">
              <label for="status" class="col-form-label"></label>
              <select name="district" class="form-control select1" id="district_id">
                <option value="0" selected disabled>Select District</option>
              </select>
    
            </div>
        </div>
    </div>
</div>



<section class="service-point-body" >
    <div class="container " name='location' id='location_id'>      

      {{-- Initially show all location --}}
      @foreach ($locations as $location) 
      <li class="sli select1 ">  
          <div class="sdiv"> 
            <dl class="f-l"><dt>Address:</dt><dd class="address"> <p>{!! $location->address !!}</p> </dd></dl> 
            <dl class="f-r"> <dt>Hours:</dt> <dd> <p>{{ $location->hours }}</p> </dd> </dl>
            <dl class="f-r warranty"> <dt>Service offered:</dt> <dd class="repair-pros"> {{ $location->product }} </dd> </dl> 
          </div> 
          <p><span class="title">Phone:</span>{{ $location->phone }}</p>  <p class="tip">Authorized collection point</p> 
      </li>
      @endforeach
      {{-- Initially show all location End--}}
         
     </div>
</section>

<div class="martp"></div>

@endsection

@push('styles')
    <style>
        .pagination{
            display:inline-flex;
        }
        .shop-categories .main-category a {
        transition: color .4s ease;
        font-size: 15px;
        color: #757575;
        margin: 0 18px;
        cursor: default;
        font-weight: 700;
    }

    /* All Credits are goes to .nice-select displey none  form correction*/
    .nice-select{
        display:none !important;
    }
    </style>

@endpush