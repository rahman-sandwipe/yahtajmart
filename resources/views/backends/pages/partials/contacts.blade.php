@extends('backends.master')
@section('page_title')
<title>Contacts</title>
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
                        <span>Contacts</span>
                    </h2>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <form method="post" action="{{ route('admin.contacts') }}">
                            @csrf
                            {{-- office_address --}}
                            <div class="form-group">
                                <label for="office_address">Office Address</label>
                                <textarea name="office_address" id="office_address" class="form-control summernote">{!! $contacts->office_address !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="shop_address">Shop Address</label>
                                <textarea name="shop_address" id="shop_address" class="form-control summernote">{!! $contacts->shop_address !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="studio_address">Studio Address</label>
                                <textarea name="studio_address" id="studio_address" class="form-control summernote">{!! $contacts->studio_address !!}</textarea>
                            </div>
                            
                            <div class="form-group">
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
    $('.summernote').summernote({
      placeholder: 'write here...',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen']]
      ]
    });
  </script>
@endsection