@extends('backends.master')
@section('page_title')
<title>Modify Product</title>
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
                        <span>Modify Product</span>
                    </h2>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <a href="{{ route('product.index') }}" class="btn btn-success">
                        <i class="fa fa-arrow-circle-left"></i> <span>Back List</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <form method="post" action="{{ route('product.edit',$getData->id) }}" enctype="multipart/form-data" class="row">
                            @csrf
                            <!-- Title -->
                            <div class="form-group col-6">
                                <label for="titleINPUT" class="control-label">Title <sup class="text-danger">*</sup></label>
                                <input type="text" name="title" value="{{ $getData->title }}" id="titleINPUT" class="form-control @error('title') is-invalid @enderror" placeholder="Title..." required>
                                @error('title') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            <!-- Category -->
                            <div class="form-group col-3">
                                <label for="cat_idINPUT">Category <sup class="text-danger">*</sup></label>
                                <select class="form-control" name="cat_id" id="cat_idINPUT">
                                    <option value="">Chooce One</option>
                                    @foreach ($category as $row)
                                    <option value="{{ $row->id }}" {{ $getData->cat_id==$row->id? 'selected':'' }}>{{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Brands -->
                            <div class="form-group col-3">
                                <label for="brand_idINPUT">Brands</label>
                                <select class="form-control" name="brand_id" id="brand_idINPUT">
                                    <option value="">Chooce One</option>
                                    @foreach ($brands as $row)
                                    <option value="{{ $row->id }}" {{ $getData->brand_id==$row->id? 'selected':'' }}>{{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- width_or_size, total_stock , regular_price , offer_price & total_discount --}}
                            <!-- Width/Size -->
                            <div class="form-group col-4">
                                <label for="width_or_sizeINPUT" class="control-label">Width/Size <sup class="text-danger">*</sup></label>
                                <input type="text" name="width_or_size" value="{{ $getData->width_or_size }}" id="width_or_sizeINPUT" class="form-control @error('width_or_size') is-invalid @enderror" placeholder="kg/cm" required>
                                @error('width_or_size') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            <!-- Total Stack -->
                            <div class="form-group col-2">
                                <label for="total_stockINPUT" class="control-label">Total Stack <sup class="text-danger">*</sup></label>
                                <input type="text" name="total_stock" value="{{ $getData->total_stock }}" id="total_stockINPUT" class="form-control @error('total_stock') is-invalid @enderror" placeholder="Type..." required>
                                @error('total_stock') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            <!-- Regular Price -->
                            <div class="form-group col-2">
                                <label for="regular_priceINPUT" class="control-label">Regular Price <sup class="text-danger">*</sup></label>
                                <input type="text" name="regular_price" value="{{ $getData->regular_price }}" id="regular_priceINPUT" class="form-control @error('regular_price') is-invalid @enderror" placeholder="Type..." required>
                                @error('regular_price') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            <!-- Offer Price -->
                            <div class="form-group col-2">
                                <label for="offer_priceINPUT" class="control-label">Offer Price<sup class="text-danger">*</sup></label>
                                <input type="text" name="offer_price" value="{{ $getData->offer_price }}" id="offer_priceINPUT" class="form-control @error('offer_price') is-invalid @enderror" placeholder="Type..." required>
                                @error('offer_price') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            <!-- Total Discount -->
                            <div class="form-group col-2">
                                <label for="total_discountINPUT" class="control-label">Total Discount<sup class="text-danger">*</sup></label>
                                <input type="text" name="total_discount" value="{{ $getData->total_discount }}" id="total_discountINPUT" class="form-control @error('total_discount') is-invalid @enderror" placeholder="Type..." required>
                                @error('total_discount') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                            </div>
                            
                            <!-- Photo -->
                            <div class="form-group col-8">
                                <label for="thumbINPUT" class="control-label">Thumbnail</label>
                                <input type="file" name="thumb" id="thumbINPUT" class="form-control">
                            </div>
                            {{-- Image Preview --}}
                            <div class="form-group col-1">
                                <div class="preview-images-zone"></div>
                            </div>
                            {{-- Oll Image Preview --}}
                            <div class="form-group col-1">
                                <img src="{{ asset($getData->thumb) }}" width="60">
                            </div>
                            
                            <!-- Status -->
                            <div class="form-group col-2">
                                <label for="statusINPUT">Status <sup class="text-danger">*</sup></label>
                                <select class="form-control" name="status" id="statusINPUT">
                                    <option value="public" {{ $getData->status=='public'? 'selected':'' }}>Public</option>
                                    <option value="private" {{ $getData->status=='private'? 'selected':'' }}>Private</option>
                                </select>
                            </div>
                            
                            <!-- Special Tags -->
                            <div class="form-group col-12">
                                <label for="s_tagsINPUT" class="control-label">Special Tags</label>
                                <input type="text" name="s_tags" value="{{ $getData->s_tags }}" id="s_tagsINPUT" class="form-control @error('s_tags') is-invalid @enderror" placeholder="Type...">
                            </div>
                            <!-- Sort Description -->
                            <div class="form-group col-12">
                                <label for="sort_descINPUT">Sort Description <sup class="text-danger">*</sup></label>
                                <textarea name="sort_desc" id="sort_descINPUT" rows="3" class="form-control summernote" required>{!! $getData->sort_desc !!}</textarea>
                            </div>
                            <!-- Description -->
                            <div class="form-group col-12">
                                <label for="descriptionINPUT">Description</label>
                                <textarea name="description" id="descriptionINPUT" rows="3" class="form-control summernote">{!! $getData->description !!}</textarea>
                            </div>
                            <!-- Aditional Info -->
                            <div class="form-group col-12">
                                <label for="aditional_infoINPUT">Aditional Info</label>
                                <textarea name="aditional_info" id="aditional_infoINPUT" rows="3" class="form-control summernote">{!! $getData->aditional_info !!}</textarea>
                            </div>
                            {{-- Meta Tags & Meta Desc --}}
                            <div class="form-group col-6">
                                <label for="meta_tagsINPUT">Meta Tags <sub class="text-danger">SEO keyword</sub></label>
                                <textarea name="meta_tags" id="meta_tagsINPUT" rows="3" class="form-control">{!! $getData->meta_tags !!}</textarea>
                            </div>
                            <div class="form-group col-6">
                                <label for="meta_descINPUT">Meta Desc <sub class="text-danger">SEO desciption</sub></label>
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
        $("input[name='thumb']").change(function() {
            readURL(this);
        });
    });
</script>
@endsection