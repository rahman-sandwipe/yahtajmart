@extends('backends.master')
@section('page_title')
<title>Add New Photos</title>
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
                        <span>Create Photos</span>
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
                        <form method="post" action="{{ route('photo.create') }}" enctype="multipart/form-data" class="row">
                            @csrf
                            <!-- Title -->
                            <div class="form-group col-12">
                                <label for="titleINPUT" class="control-label">Image Title <sup class="text-danger">*</sup></label>
                                <input type="text" name="title" id="titleINPUT" class="form-control @error('title') is-invalid @enderror" placeholder="Title..." required>
                                @error('title') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>

                            {{-- INTRO --}}
                            <div class="form-group col-12">
                                <label for="introINPUT">INTRO <sub class="text-danger">*</sub></label>
                                <textarea name="intro" id="introINPUT" rows="3" class="form-control summernote @error('intro') is-invalid @enderror" placeholder="Image Intro"></textarea>
                                @error('intro') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            
                            
                            <!-- Thumbnail -->
                            <div class="form-group col-6">
                                <label for="thumbINPUT" class="control-label">Thumbnail <sup class="text-danger">*</sup></label>
                                <input type="file" name="thumb" id="thumbINPUT" class="form-control @error('thumb') is-invalid @enderror" required>
                                <span class="text-info">Thumbnail Size (1200*730) px</span>
                                @error('thumb') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            {{-- File Size --}}
                            <div class="form-group col-2">
                                <label for="file_sizeINPUT" class="control-label">File Size</label>
                                <input type="text" name="file_size" id="file_sizeINPUT" class="form-control" placeholder="File size...">
                            </div>
                            {{--Reluar Price --}}
                            <div class="form-group col-2">
                                <label for="r_priceINPUT" class="control-label">Reluar Price <sup class="text-danger">*</sup></label>
                                <input type="text" name="r_price" id="r_priceINPUT" class="form-control @error('r_price') is-invalid @enderror" placeholder="Regular Price..." required>
                                @error('r_price') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror    
                            </div>
                            {{-- Special Price --}}
                            <div class="form-group col-2">
                                <label for="s_priceINPUT" class="control-label">Special Price <sup class="text-danger">*</sup></label>
                                <input type="text" name="s_price" id="s_priceINPUT" class="form-control @error('s_price') is-invalid @enderror" placeholder="Special Price..." required>
                                @error('s_price') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>


                            <!-- main_images -->
                            <div class="form-group col-7">
                                <label for="main_imagesINPUT" class="control-label">Imagess <sup class="text-danger">*</sup></label>
                                <input type="file" name="images[]" id="main_imagesINPUT" class="form-control @error('images') is-invalid @enderror" multiple required>
                                <span class="text-info">These images will be uploaded in original size</span>
                                @error('images') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            
                            {{-- Category --}}
                            <div class="form-group col-3">
                                <label for="cat_idINPUT">Category</label>
                                <select class="form-control" name="cat_id" id="cat_idINPUT">
                                    <option value="">Select One</option>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Status -->
                            <div class="form-group col-2">
                                <label for="statusINPUT">Status <sup class="text-danger">*</sup></label>
                                <select class="form-control" name="status" id="statusINPUT">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                </select>
                            </div>
                            {{-- Multi Image Preview --}}
                            <div class="form-group col-12">
                                <div class="preview-images-zone"></div>
                            </div>
                            
                            {{-- Meta Tags & Meta Desc --}}
                            <div class="form-group col-6">
                                <label for="meta_tagsINPUT">Meta Tags <sub class="text-danger">SEO keyword</sub></label>
                                <textarea name="meta_tags" id="meta_tagsINPUT" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="form-group col-6">
                                <label for="meta_descINPUT">Meta Desc <sub class="text-danger">SEO desciption</sub></label>
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
@section('scripts')
<script>
    $(document).ready(function() {
        // Display image preview
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var html = '<div class="preview-image"><img src="' + e.target.result + '"></div>';
                    $('.preview-images-zone').append(html);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        // Trigger image preview when file input changes
        $("input[name='images[]']").change(function() {
            readURL(this);
        });
    });
</script>
@endsection