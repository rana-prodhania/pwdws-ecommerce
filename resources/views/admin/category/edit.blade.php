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
                <div class="ibox-title">Category Edit</div>
                <div class="ibox-tools">
                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                </div>
            </div>
            <div class="ibox-body" style="">
                <form action="{{ route('admin.category.update', $category->id) }}" method="POST" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Category Name</label>
                        <div class="col-sm-10">
                            <input name="name" value="{{ $category->name??old('name') }}" class="form-control" type="text" placeholder="Name">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
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
