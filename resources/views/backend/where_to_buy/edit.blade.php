@extends('backend.layouts.master')
@section('title','CoolPad || where-to-buy')
@section('main-content')

<div class="card">
    <h5 class="card-header">Where to buy</h5>
    <div class="card-body">
        <form method="post" action="{{ route('where-to-buy.update',$wheretobuy->id) }}">
            {{csrf_field()}}
            @method('PATCH')
            <div class="form-group">
                <label for="inputName" class="col-form-label">Name <span class="text-danger">*</span></label>
                <input id="inputName" type="text" name="name" placeholder="Enter Name" value="{{$wheretobuy->name}}"
                    class="form-control">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="inputUrl" class="col-form-label">URL <span class="text-danger">*</span></label>
                <input id="inputUrl" type="text" name="url" placeholder="Enter url" value="{{ $wheretobuy->url }}"
                    class="form-control">
                @error('url')
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