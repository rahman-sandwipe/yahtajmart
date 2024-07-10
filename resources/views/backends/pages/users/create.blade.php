@extends('backends.master')
@section('page_title')
<title>Add New User</title>
@endsection
@section('dashboard_layouts')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">                        
                    <h2>
                        <a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <span>Users</span>
                    </h2>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <p class="lead text-center">Create an account</p>
                    </div>
                    <div class="body">
                        <form method="post" action="{{ route('newuser') }}" class="form-auth-small row" enctype="multipart/form-data">
                            @csrf
                            <!-- Name -->
                            <div class="form-group col-6">
                                <label for="name" class="control-label">Name <sup class="text-danger">*</sup></label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" required>
                                @error('name') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            <!-- Email Address -->
                            <div class="form-group col-6">
                                <label for="email" class="control-label">Email <sup class="text-danger">*</sup></label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required>
                                @error('email') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>


                            <!-- Number -->
                            <div class="form-group col-6">
                                <label for="number" class="control-label">Number <sup class="text-danger">*</sup></label>
                                <input type="text" name="number" id="number" class="form-control @error('number') is-invalid @enderror" placeholder="number" required>
                                @error('number') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            <!-- Access Type -->
                            <div class="form-group col-2">
                                <label for="userType">Type<sup class="text-danger">*</sup></label>
                                <select class="form-control" name="user_type" id="userType">
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                            <!-- Status -->
                            <div class="form-group col-2">
                                <label for="userStatus">User Status <sup class="text-danger">*</sup></label>
                                <select class="form-control" name="user_status" id="userStatus">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                </select>
                            </div>
                            <!-- Date Of Bird -->
                            <div class="form-group col-2">
                                <label for="dobInput">Date Of Bird</label>
                                <input type="date" class="form-control" name="dob" id="dobInput">
                            </div>


                            <!-- Address -->
                            <div class="form-group col-12">
                                <label for="address" class="control-label">Address</label>
                                <input type="text" name="address" id="address" class="form-control" placeholder="Address...">
                            </div>


                            <!-- Photo -->
                            <div class="form-group col-12">
                                <label for="photoInput" class="control-label">Photo</label>
                                <input type="file" name="avatar" id="photoInput" class="form-control" placeholder="Photo...">
                            </div>
                            

                            <!-- Password -->
                            <div class="form-group col-6">
                                <label for=password" class="control-label">Password <sup class="text-danger">*</sup></label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                                @error('password') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                                
                            </div>
                            <!-- Confirm Password -->
                            <div class="form-group col-6">
                                <label for="password_confirmation" class="control-label">Confirm Password <sup class="text-danger">*</sup></label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password" required>
                                @error('password_confirmation') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            
                            <div class="form-group col-12">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('REGISTER') }}</button>
                            </div>
                        </form>
                    </div>
                </div
            </div>
        </div>
    </div>
</div>
@endsection