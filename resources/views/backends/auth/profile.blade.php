@extends('backends.master')
@section('page_title')
    <title>Admin Profile</title>
@endsection
@section('dashboard_layouts')
<div id="main-content" class="profilepage_1">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#Settings">Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#preferences">Socials Link</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="Settings">
                            <div class="body">
                                <h6>Basic Information</h6>
                                <div class="clearfix">
                                    <form class="row" action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                        <div class="form-group col-md-12">                                                
                                            <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12">                                                
                                            <input type="text" name="email" value="{{ auth()->user()->email }}" class="form-control">
                                        </div>
                                        <div class="form-group col-md-11">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <div class="form-group col-md-1">                                                
                                            @if (auth()->user()->image==NULL)
                                                <img src="{{ asset("uploads/users/default_image.png") }}" alt="" width="50" class="mb-2">                                            
                                            @else
                                                <img src="{{ asset(auth()->user()->image) }}" alt="" width="50" class="mb-2">
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="preferences">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <div class="body">
                                        <h6>Your Login Sessions</h6>
                                        <ul class="list-unstyled list-login-session">
                                            <li>
                                                <div class="login-session">
                                                    <i class="fa fa-laptop device-icon"></i>
                                                    <div class="login-info">
                                                        <h3 class="login-title">Mac - New York, United States</h3>
                                                        <span class="login-detail">Chrome - <span class="text-success">Active Now</span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="login-session">
                                                    <i class="fa fa-desktop device-icon"></i>
                                                    <div class="login-info">
                                                        <h3 class="login-title">Windows 10 - New York, United States</h3>
                                                        <span class="login-detail">Firefox - about an hour ago</span>
                                                    </div>
                                                    <button type="button" class="btn btn-link btn-logout" data-container="body" data-toggle="tooltip" title="Close this login session"><i class="fa fa-times-circle text-danger"></i></button>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="login-session">
                                                    <i class="fa fa-mobile fa-fw device-icon"></i>
                                                    <div class="login-info">
                                                        <h3 class="login-title">Android - New York, United States</h3>
                                                        <span class="login-detail">Android Browser - yesterday</span>
                                                    </div>
                                                    <button type="button" class="btn btn-link btn-logout" data-container="body" data-toggle="tooltip" title="Close this login session"><i class="fa fa-times-circle text-danger"></i></button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="body">
                                        <h6>Connected Social Media</h6>
                                        <ul class="list-unstyled list-connected-app">
                                            <li>
                                                <div class="connected-app">
                                                    <i class="fa fa-facebook app-icon"></i>
                                                    <div class="connection-info">
                                                        <h3 class="app-title">FaceBook</h3>
                                                        <span class="actions"><a href="javascript:void(0);">View Permissions</a> <a href="javascript:void(0);" class="text-danger">Revoke Access</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="connected-app">
                                                    <i class="fa fa-twitter app-icon"></i>
                                                    <div class="connection-info">
                                                        <h3 class="app-title">Twitter</h3>
                                                        <span class="actions"><a href="javascript:void(0);">View Permissions</a> <a href="javascript:void(0);" class="text-danger">Revoke Access</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="connected-app">
                                                    <i class="fa fa-instagram app-icon"></i>
                                                    <div class="connection-info">
                                                        <h3 class="app-title">Instagram</h3>
                                                        <span class="actions"><a href="javascript:void(0);">View Permissions</a> <a href="javascript:void(0);" class="text-danger">Revoke Access</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="connected-app">
                                                    <i class="fa fa-linkedin app-icon"></i>
                                                    <div class="connection-info">
                                                        <h3 class="app-title">Linkedin</h3>
                                                        <span class="actions"><a href="javascript:void(0);">View Permissions</a> <a href="javascript:void(0);" class="text-danger">Revoke Access</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="connected-app">
                                                    <i class="fa fa-vimeo app-icon"></i>
                                                    <div class="connection-info">
                                                        <h3 class="app-title">Vimeo</h3>
                                                        <span class="actions"><a href="javascript:void(0);">View Permissions</a> <a href="javascript:void(0);" class="text-danger">Revoke Access</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page_scripts')
<script>
    $(function() {
        // photo upload
        $('#btn-upload-photo').on('click', function() {
            $(this).siblings('#filePhoto').trigger('click');
        });
    
        // plans
        $('.btn-choose-plan').on('click', function() {
            $('.plan').removeClass('selected-plan');
            $('.plan-title span').find('i').remove();
    
            $(this).parent().addClass('selected-plan');
            $(this).parent().find('.plan-title').append('<span><i class="fa fa-check-circle"></i></span>');
        });
    });
</script>
@endsection