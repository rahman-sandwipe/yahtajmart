@extends('backends.master')
@section('page_title')
    <title>Users Table</title>
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
                        <li class="breadcrumb-item active">Users</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <a href="{{ route('newuser') }}" class="btn btn-success"><i class="fa fa-edit"></i> Add New</a>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>New Admission List</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                {{-- <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul> --}}
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Name</th>
                                        <th>Contacts</th>
                                        <th>Join US</th>
                                        <th>Others</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td class="row">
                                            <div class="col-md-3">
                                                <img src="{{ asset($user->avatar) }}" alt="{{ $user->name }}" width="70"> 
                                            </div>
                                            <div class="col-md-9">
                                                <span>SL#: {{ $loop->iteration }}</span> <br>
                                                <span>OID#: {{ $user->user_id }}</span> <br>
                                                <span>Name: {{ $user->name }}</span>
                                            </div>
                                        
                                        </td>
                                        <td>
                                            Email: {{ $user->email }} <br>
                                            Number: {{ $user->number }} <br>
                                            Address: {{ $user->address }}
                                        </td>
                                        <td>
                                            Join: {{ $user->created_at }} <br>
                                            Update: {{ $user->updated_at }} <br>
                                            @if ($user->dob==NULL)
                                            DOB: <span class="badge badge-danger">NULL</span>
                                            @else
                                                DOB: {{ $user->dob }} <br>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="">
                                                @if ($user->user_status=="public")
                                                    <a href="{{ route('userStatus',$user->id) }}" class="badge badge-success">Public</a>
                                                @else
                                                    <a href="{{ route('userStatus',$user->id) }}" class="badge badge-Danger">Private</a>
                                                @endif
                                            </span>
                                            <br>
                                            <span>
                                                @if ($user->user_type=="admin")
                                                    <a href="{{ route('userType',$user->id) }}" class="badge badge-primary">Admin</a>
                                                @else
                                                    <a href="{{ route('userType',$user->id) }}" class="badge badge-info">User</a>
                                                @endif
                                            </span>
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