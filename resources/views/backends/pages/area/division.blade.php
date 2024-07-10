@extends('backends.master')
@section('page_title')
    <title>Division Table</title>
@endsection
@section('dashboard_layouts')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}"><i class="icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item active">Division</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Add New</button>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($divisions as $item)
                                    <tr>
                                        <td>
                                            <span>SL#: {{ $loop->iteration }}</span> <br>
                                            <span>ID#: {{ $item->id }}</span> <br>
                                        </td>
                                        <td>
                                            <span>Name: {{ $item->name }}</span><br />
                                            <span>Slug: {{ $item->slug }} </span>
                                        </td>
                                        <td>
                                            Update: {{ $item->updated_at }} <br>
                                            Create: {{ $item->created_at }}
                                        </td>
                                        <td class="text-center">
                                            <span>
                                                @if ($item->status=="public")
                                                <button type="button" class="btn btn-success btn-sm">Public</button>
                                                @else
                                                <button type="button" class="btn btn-danger btn-sm">Private</button>
                                                @endif
                                            </span>
                                            <p class="demo-button pt-2">
                                                @if ($item->status=="public")
                                                <a href="{{ route('division.status',$item->id) }}" class="btn btn-danger btn-sm text-light" title="Private">
                                                    <span class="sr-only">Private</span><i class="fa fa-eye-slash"></i>
                                                </a>
                                                @else
                                                <a href="{{ route('division.status',$item->id) }}" class="btn btn-success btn-sm text-light" title="Public">
                                                    <span class="sr-only">Public</span><i class="fa fa-eye"></i>
                                                </a>
                                                @endif
                                                
                                                <button type="button" onclick="editDiv( {{ $item->id }} )" class="btn btn-info btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                    
                                                <a href="{{ route('division.destroy',$item->id) }}" class="btn btn-danger btn-sm text-light" title="Delete">
                                                    <span class="sr-only">Delete</span> <i class="fa fa-trash-o"></i>
                                                </a>
                                            </p>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal with btn -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form method="post" action="{{ route('division.create') }}">
                    @csrf
                    <!-- Name -->
                    <div class="form-group">
                        <label for="name" class="control-label">Name <sup class="text-danger">*</sup></label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" required>
                        @error('name') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                    </div>
                    <!-- Status -->
                    <div class="form-group mb-20">
                        <label for="statusINPUT">Status <sup class="text-danger">*</sup></label>
                        <select class="form-control" name="status" id="statusINPUT">
                            <option value="public">Public</option>
                            <option value="private">Private</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-block">INSERT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal with edit btn -->
<div class="modal fade" id="btnEdit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form method="post" action="{{ route('division.create') }}">
                    @csrf
                    <!-- Name -->
                    <div class="form-group">
                        <label for="name" class="control-label">Name <sup class="text-danger">*</sup></label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" required>
                        @error('name') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                    </div>
                    <!-- Status -->
                    <div class="form-group mb-20">
                        <label for="statusINPUT">Status <sup class="text-danger">*</sup></label>
                        <select class="form-control" name="status" id="statusINPUT">
                            <option value="public">Public</option>
                            <option value="private">Private</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-block">INSERT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    function editDiv(id){
        // alert(id);
        $.ajax({
            url: "{{  url('admin/edit/division/') }}/"+id,
            type:"GET",
            dataType:"json",
            success:function(data) {
                console.log(data);
                $('#btnEdit').show();
            },
        });
    }
 </script>
@endsection