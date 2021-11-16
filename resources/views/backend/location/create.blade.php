@extends('backend.layouts.master')

@section('title','CoolPad || location Create')

@section('main-content')

<div class="card">
    <h5 class="card-header">Add location</h5>
    <div class="card-body">
      <form method="post" action="{{route('location.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputDistrict" class="col-form-label">District <span class="text-danger">*</span></label>
          <select name="district_id" class="form-control">
            <option value="0" disabled selected>Select District</option>
            @foreach ($districts as $district)
              <option value="{{ $district->id }}">{{ ucfirst($district->name) }}</option>   
            @endforeach
          </select>
        @error('district_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="inputAddress" class="col-form-label">Address</label>
          <textarea class="form-control" id="address" name="address"></textarea>
          @error('address')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputHours" class="col-form-label">Hours <span class="text-danger">*</span></label>
        <input id="inputHours" type="text" name="hours" placeholder="Enter Working Hours"  value="{{old('hours')}}" class="form-control">
        @error('hours')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="inputProduct" class="col-form-label">Product <span class="text-danger">*</span></label>
        <input id="inputProduct" type="text" name="product" placeholder="Enter Product Title"  value="{{old('product')}}" class="form-control">
        @error('product')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="inputPhone" class="col-form-label">Phone <span class="text-danger">*</span></label>
        <input id="inputPhone" type="text" name="phone" placeholder="Enter Phone"  value="{{old('phone')}}" class="form-control">
        @error('phone')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Reset</button>
           <button class="btn btn-success" type="submit">Submit</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
    $('#lfm').filemanager('image');

    $(document).ready(function() {
    $('#address').summernote({
      placeholder: "Write short address.....",
        tabsize: 2,
        height: 150
    });
    });
</script>
@endpush