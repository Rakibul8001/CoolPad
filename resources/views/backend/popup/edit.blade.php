@extends('backend.layouts.master')
@section('title','CoolPad || popup Edit')
@section('main-content')

<div class="card">
  <h5 class="card-header">Edit popup</h5>
  <div class="card-body">
    <form method="post" action="{{route('popup.update',$popup->id)}}">
      @csrf
      @method('PATCH')



      <div class="form-group">
        <label for="inputimage" class="col-form-label">Image <span class="text-danger">(760x400)</span></label>
        <div class="input-group">
          <span class="input-group-btn">
            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
              <i class="fa fa-picture-o"></i> Choose
            </a>
          </span>
          <input id="thumbnail" class="form-control" type="text" name="image" value="{{$popup->image}}">
        </div>
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
        @error('image')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
        <select name="status" class="form-control">
          <option value="active" {{(($popup->status=='active') ? 'selected' : '')}}>Active</option>
          <option value="inactive" {{(($popup->status=='inactive') ? 'selected' : '')}}>Inactive</option>
        </select>
        @error('status')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

      <div class="form-group mb-3">
        <button class="btn btn-success" type="submit">Update</button>
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
    $('#description').summernote({
      placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
    });
</script>
@endpush