@extends('backends.master')
@section('page_title')
    <title>Settings</title>
@endsection
@section('dashboard_layouts')
<div id="main-content" class="profilepage_1">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2>
                        <ul class="breadcrumb">
                            <li><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Settings</li>
                        </ul>
                    </h2>
                </div>
            </div>
        </div>
        <div class="card">
            <div>
                @if(session()->has('success'))
                    <p class="bg-success">
                        {{ session()->get('success') }}
                    </p>
                @endif
                
                @if ($errors->any())
                    <ul class="bg-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                @endif
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
                                <a class="nav-link" data-toggle="tab" href="#socials">Socials Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#supportCenter">Support Center</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">

                        {{-- Settings --}}
                        <div class="tab-pane active" id="Settings">
                            @include('backends.pages.settings.settings')
                        </div>

                        {{-- Socials --}}
                        <div class="tab-pane" id="socials">
                            @include('backends.pages.settings.socials')
                        </div>
                        
                        
                        {{-- supportCenter --}}
                        <div class="tab-pane" id="supportCenter">
                            @include('backends.pages.settings.support-center')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection