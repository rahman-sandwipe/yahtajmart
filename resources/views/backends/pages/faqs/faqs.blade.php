@extends('backends.master')
@section('page_title')
    <title>FAQs</title>
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
                        <span>FAQs</span>
                    </h2>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <a href="{{ route('faqs.create') }}" class="btn btn-success">
                        <i class="fa fa-arrow-circle-left"></i> <span>Add New</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="card">
                <div class="body">
                    <div class="accordion custom" id="accordion">
                        @foreach ($faqs as $row)
                        <div>
                            <div class="card-header" id="heading{{ $row->id }}">
                                <h5 class="bg-info row">
                                    <div class="col-9 text-left">
                                        <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapse{{ $row->id }}" aria-expanded="false" aria-controls="collapse{{ $row->id }}">
                                            {{ $row->question }}
                                        </button>
                                    </div>
                                    <div class="col-2">
                                        @if ($row->status=='public')
                                            <span class="text-right text-light">Public</span>
                                        @else
                                            <span class="text-right text-light">Private</span>
                                        @endif
                                    </div>
                                    <div class="col-1 text-right">
                                        <a class="btn btn-outline-warning text-light" href="{{ route('faqs.edit',$row->id) }}" >
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </div>
                                </h5>
                            </div>                                
                            <div id="collapse{{ $row->id }}" class="collapse" aria-labelledby="heading{{ $row->id }}" data-parent="#accordion">
                                <div class="card-body">
                                    {!! $row->answer !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection