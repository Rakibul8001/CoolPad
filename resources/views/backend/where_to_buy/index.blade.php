@extends('backend.layouts.master')
@section('title','CoolPad || wheretobuy Page')
@section('main-content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="row">
        <div class="col-md-12">
            @include('backend.layouts.notification')
        </div>
    </div>
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary float-left">wheretobuy List</h6>
        <a href="{{route('where-to-buy.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip"
            data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add wheretobuy</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>URL</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>URL</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($wheretobuys as $wheretobuy)
                    <tr>
                        <td>{{$wheretobuy->id}}</td>
                        <td>{{$wheretobuy->name}}</td>
                        <td>{{$wheretobuy->url}}</td>
                        <td>
                            <a href="{{route('where-to-buy.edit',$wheretobuy->id)}}"
                                class="btn btn-primary btn-sm float-left mr-1"
                                style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit"
                                data-placement="bottom"><i class="fas fa-edit"></i></a>
                            <form method="POST" action="{{route('where-to-buy.destroy',[$wheretobuy->id])}}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm dltBtn" data-id={{$wheretobuy->id}}
                                    style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                    data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection