@extends('backends.master')
@section('page_title')
<title>Modify Video</title>
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
                        <span>Modify Video</span>
                    </h2>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <button type="button" class="btn btn-success">
                        <span># {{ $getData->public_id }}</span>
                    </button>
                    <a href="{{ route('video.index') }}" class="btn btn-outline-success">
                        <i class="fa fa-arrow-circle-left"></i> <span>Back List</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <form method="post" action="{{ route('video.edit',$getData->id) }}" enctype="multipart/form-data" class="row">
                            @csrf
                            <!-- Headline -->
                            <div class="form-group col-7">
                                <label for="headlineINPUT" class="control-label">Headline <sup class="text-danger">*</sup></label>
                                <input type="text" name="headline" value="{{ $getData->headline }}" id="headlineINPUT" class="form-control @error('headline') is-invalid @enderror" required>
                                @error('headline') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            <!-- flatform -->
                            <div class="form-group col-2">
                                <label for="flatformINPUT">Flatform <sup class="text-danger">*</sup></label>
                                <select class="form-control" name="flatform" id="flatformINPUT">
                                    <option value="youtube" {{ $getData->flatform=='youtube' ? 'selected':'' }}>Youtebe</option>
                                    <option value="facebook" {{ $getData->flatform=='facebook' ? 'selected':'' }}>Facebook</option>
                                </select>
                            </div>
                            <!-- Video Address -->
                            <div class="form-group col-3">
                                <label for="embed_codeINPUT" class="control-label">Youtebe Embed Or Facebook ID<sup class="text-danger">*</sup></label>
                                <input type="text" name="embed_code" value="{{ $getData->embed_code }}" id="embed_codeINPUT" class="form-control @error('embed_code') is-invalid @enderror" required>
                                @error('text') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            {{-- Intro --}}
                            <div class="form-group col-12">
                                <label for="introINPUT">Intro<sub class="text-danger">*</sub></label>
                                <textarea name="intro" id="introINPUT" rows="3" class="form-control">{!! $getData->intro !!}</textarea>
                            </div>
                            <!-- Photo -->
                            <div class="form-group col-6">
                                <label for="thumbINPUT" class="control-label">Thumbnail</label>
                                <input type="file" name="thumb" id="thumbINPUT" class="form-control">
                            </div>
                            <div class="form-group col-1">
                                <img src="{{ asset($getData->thumb) }}" width="90">
                            </div>
                            <!-- Category -->
                            <div class="form-group col-3">
                                <label for="cat_idINPUT">Category <sup class="text-danger">*</sup></label>
                                <select class="form-control" name="cat_id" id="cat_idINPUT">
                                    <option value="">Choice One</option>
                                    @foreach ($category as $item)
                                    <option value="{{ $item->id }}" {{ $getData->cat_id==$item->id ? 'selected':'' }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Status -->
                            <div class="form-group col-2">
                                <label for="statusINPUT">Status <sup class="text-danger">*</sup></label>
                                <select class="form-control" name="status" id="statusINPUT">
                                    <option value="public" {{ $getData->public=='public' ? 'selected':'' }}>Public</option>
                                    <option value="private" {{ $getData->private=='private' ? 'selected':'' }}>Private</option>
                                </select>
                            </div>
                            
                            {{-- Meta Tags & Meta Desc --}}
                            <div class="form-group col-6">
                                <label for="meta_tagsINPUT">Meta Tags <sub class="text-danger">SEO keyword</sub></label>
                                <textarea name="meta_tags" id="meta_tagsINPUT" rows="3" class="form-control">{!! $getData->meta_tags !!}</textarea>
                            </div>
                            <div class="form-group col-6">
                                <label for="meta_descINPUT">Meta Desc <sub class="text-danger">SEO Description</sub></label>
                                <textarea name="meta_desc" id="meta_descINPUT" rows="3" class="form-control">{!! $getData->meta_desc !!}</textarea>
                            </div>
                            
                            <div class="form-group col-12">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection