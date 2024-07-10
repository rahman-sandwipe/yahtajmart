@extends('backends.master')
@section('page_title')
    <title>Photos Table</title>
@endsection
@section('dashboard_layouts')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}"><i class="icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item active">Photos</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <a href="{{ route('photo.create') }}" class="btn btn-success">
                        <i class="fa fa-edit"></i> <span>Add New</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Thumb</th>
                                        <th>Info</th>
                                        <th>Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($photos as $item)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($item->thumb) }}" width="120"> 
                                        </td>
                                        <td>
                                            <span>SL#   : {{ $loop->iteration }}</span> <br>
                                            <span>PID#  : {{ $item->public_id }}</span> <br>
                                            <span>Head  : {{ $item->title }}</span>
                                            <span>Author: {{ $item->user->name }}</span>
                                        </td>
                                        <td>
                                            Count Picture: {{ count($photos) }} <br>
                                            Category     : {{ $item->category->name }} <br>
                                            Update       : {{ $item->updated_at }} <br>
                                            Create       : {{ $item->created_at }}
                                        </td>
                                        <td class="text-center">
                                            <span>
                                                @if ($item->status=="public")
                                                <button type="button" class="btn btn-success btn-sm">Public</button>
                                                @else
                                                <button type="button" class="btn btn-danger btn-sm">Private</button>
                                                @endif
                                            </span>
                                            <p class="demo-button pt-2">
                                                @if ($item->status=="public")
                                                <a href="{{ route('photo.status',$item->id) }}" class="btn btn-danger btn-sm text-light" title="Private">
                                                    <span class="sr-only">Private</span><i class="fa fa-eye-slash"></i>
                                                </a>
                                                @else
                                                <a href="{{ route('photo.status',$item->id) }}" class="btn btn-success btn-sm text-light" title="Public">
                                                    <span class="sr-only">Public</span><i class="fa fa-eye"></i>
                                                </a>
                                                @endif
                                                <a href="{{ route('photo.edit',$item->id) }}" class="btn btn-success btn-sm text-light" title="Edit">
                                                    <span class="sr-only">Edit</span> <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ route('photo.destroy',$item->id) }}" class="btn btn-danger btn-sm text-light" title="Delete">
                                                    <span class="sr-only">Delete</span> <i class="fa fa-trash-o"></i>
                                                </a>
                                            </p>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection