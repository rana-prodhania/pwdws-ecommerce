@extends('admin.layouts.master')

@section('content')
    <!-- START PAGE CONTENT-->
    <div class="page-heading d-flex justify-content-between align-items-center">
        <h1 class="page-title">Dashboard</h1>

        <a href="{{ route('admin.category.index') }}" class="btn btn-danger">Back to list</a>

    </div>
    <div class="page-content fade-in-up">
        {{-- <div class="ibox">
            <div class="ibox-head d-flex justify-content-between">
                <div class="ibox-title">Category Create</div>               
                <a href="{{ route('admin.category.index') }}" class="btn btn-primary">Back to list</a>
            </div>
            <div class="ibox-body">
              
            </div>
        </div> --}}
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Category Create</div>
                <div class="ibox-tools">
                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                </div>
            </div>
            <div class="ibox-body" style="">
                <form class="form-horizontal">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Email address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 ml-sm-auto">
                            <label class="ui-checkbox ui-checkbox-gray">
                                <input type="checkbox">
                                <span class="input-span"></span>Remamber me</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 ml-sm-auto">
                            <button class="btn btn-info" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- END PAGE CONTENT-->
@endsection

@push('page_css')
@endpush

@push('custom_css')
@endpush

@push('page_js')
@endpush

@push('custom_js')
@endpush
