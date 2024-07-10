@extends('backends.master')
@section('page_title')
<title>Modify Feedback</title>
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
                        <span>Modify Feedback</span>
                    </h2>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <button type="button" class="btn btn-outline-success">
                        <span>{{ $getData->feedback_id }}</span>
                    </button>
                    <a href="{{ route('feedback.index') }}" class="btn btn-success">
                        <i class="fa fa-arrow-circle-left"></i> <span>Back List</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <form method="post" action="{{ route('feedback.edit',$getData->id) }}" enctype="multipart/form-data" class="row">
                            @csrf
                            <!-- Name -->
                            <div class="form-group col-6">
                                <label for="name" class="control-label">Name <sup class="text-danger">*</sup></label>
                                <input type="text" name="name" value="{{ $getData->name }}" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" required>
                                @error('name') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            <!-- Designation Address -->
                            <div class="form-group col-6">
                                <label for="designationINPUT" class="control-label">Designation <sup class="text-danger">*</sup></label>
                                <input type="text" name="designation" value="{{ $getData->designation }}" id="designationINPUT" class="form-control @error('designation') is-invalid @enderror" placeholder="Designation" required>
                                @error('text') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            
                            <!-- Photo -->
                            <div class="form-group col-7">
                                <label for="thumbINPUT" class="control-label">Thumbnail</label>
                                <input type="file" name="thumb" id="thumbINPUT" class="form-control">
                            </div>
                            <div class="form-group col-1">
                                <img src="{{ asset($getData->thumb) }}" width="80">
                            </div>
                            <!-- Status -->
                            <div class="form-group col-2">
                                <label for="statusINPUT">Status <sup class="text-danger">*</sup></label>
                                <select class="form-control" name="status" id="statusINPUT">
                                    <option value="public" {{ $getData->status=='public'?'selected':'' }}>Public</option>
                                    <option value="private" {{ $getData->status=='private'?'selected':'' }}>Private</option>
                                </select>
                            </div>
                            
                            <!-- CLient ID -->
                            <div class="form-group col-2">
                                <label for="client_idINPUT">Client ID <sup class="text-danger">*</sup></label>
                                <input type="text" name="client_id" value="{{ $getData->client_id }}" id="client_idINPUT" class="form-control" required>
                            </div>
                            
                            {{-- Description --}}
                            <div class="form-group col-12">
                                <label for="descriptionINPUT">Description <sub class="text-danger">*</sub></label>
                                <textarea name="description" id="descriptionINPUT" rows="3" class="form-control">{!! $getData->description !!}</textarea>
                            </div>
                            
                            <div class="form-group col-12">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div
            </div>
        </div>
    </div>
</div>
@endsection