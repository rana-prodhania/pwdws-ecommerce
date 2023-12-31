@extends('admin.layouts.master')

@section('content')
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Category</li>
        </ol>
    </div>
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head d-flex justify-content-between">
                <div class="ibox-title">All Categories</div>               
                <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="ibox-body">
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        @forelse ($categories as $index => $category)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                                    <form class="d-inline" action="{{ route('admin.category.destroy', $category->id) }}" method="POST" >
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are you sure you want to delete?')" type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>                           
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No Category Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
       
    </div>
    <!-- END PAGE CONTENT-->
@endsection

@push('page_css')
    <link href="{{ asset('/assets/backend/vendors/DataTables/datatables.min.css') }}" rel="stylesheet" />
@endpush

@push('page_js')
<script src="{{ asset('/assets/backend/vendors/DataTables/datatables.min.js')}}" type="text/javascript"></script>
@endpush

@push('custom_js')
    <script>
         $('#example-table').DataTable()
    </script>
@endpush