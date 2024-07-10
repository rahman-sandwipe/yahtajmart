@extends('backends.master')
@section('page_title')
<title>Add New Post</title>
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
                        <span>Create Post</span>
                    </h2>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <a href="{{ route('blog.index') }}" class="btn btn-success">
                        <i class="fa fa-arrow-circle-left"></i> <span>Back List</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <form method="post" action="{{ route('blog.create') }}" enctype="multipart/form-data" class="row">
                            @csrf
                            <!-- Headline -->
                            <div class="form-group col-12">
                                <label for="headlineINPUT" class="control-label">Headline <sup class="text-danger">*</sup></label>
                                <input type="text" name="headline" id="headlineINPUT" class="form-control @error('headline') is-invalid @enderror" placeholder="Headline" required>
                                @error('headline') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>


                            {{-- INTRO --}}
                            <div class="form-group col-12">
                                <label for="introINPUT">INTRO <sub class="text-danger">*</sub></label>
                                <textarea name="intro" id="introINPUT" rows="3" class="form-control"></textarea>
                            </div>
                            
                            
                            {{-- Contrents --}}
                            <div class="form-group col-12">
                                <label for="contentsINPUT">CONTENTS <sub class="text-danger">*</sub></label>
                                <textarea name="contents" id="contentsINPUT" rows="3" class="form-control summernote"></textarea>
                            </div>
                            
                            <!-- Thumbnail -->
                            <div class="form-group col-6">
                                <label for="thumbINPUT" class="control-label">Thumbnail</label>
                                <input type="file" name="thumb" id="thumbINPUT" class="form-control" required>
                                <span class="text-info">Thumbnail Size (1200*730) px</span>
                            </div>
                            {{-- Caption --}}
                            <div class="form-group col-6">
                                <label for="captionINPUT" class="control-label">Caption</label>
                                <input type="text" name="caption" id="captionINPUT" class="form-control" required>
                            </div>

                            
                            <!-- Status -->
                            <div class="form-group col-6">
                                <label for="statusINPUT">Status <sup class="text-danger">*</sup></label>
                                <select class="form-control" name="status" id="statusINPUT">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="cat_idINPUT">Category <sup class="text-danger">*</sup></label>
                                <select class="form-control" name="cat_id" id="cat_idINPUT">
                                    <option value="">Select One</option>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            

                            {{-- Meta Tags & Meta Desc --}}
                            <div class="form-group col-6">
                                <label for="meta_tagsINPUT">Meta Tags <sub class="text-danger">SEO keyword</sub></label>
                                <textarea name="meta_tags" id="meta_tagsINPUT" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="form-group col-6">
                                <label for="meta_descINPUT">Meta Desc <sub class="text-danger">SEO keyword</sub></label>
                                <textarea name="meta_desc" id="meta_descINPUT" rows="3" class="form-control"></textarea>
                            </div>
                            
                            <div class="form-group col-12">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">INSERT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection