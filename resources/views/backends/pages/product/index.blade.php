@extends('backends.master')
@section('page_title')
    <title>Products Table</title>
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
                        <li class="breadcrumb-item active">Products</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <a href="{{ route('product.create') }}" class="btn btn-success"><i class="fa fa-edit"></i> Add New</a>
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
                                        <th>Thumb.</th>
                                        <th>Info.</th>
                                        <th>Price Info.</th>
                                        <th>Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $item)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($item->thumb) }}" alt="{{ $item->name }}" width="90"> 
                                        </td>
                                        <td>
                                            <span class="btn btn-sm btn-outline-primary">SL#           : {{ $loop->iteration }}</span> <br />
                                            <span class="btn btn-sm btn-outline-warning mt-2">Product ID#   : {{ $item->product_id }}</span> <br />
                                            <span>Title         : {{ $item->title }}</span>
                                        </td>
                                        <td>
                                            <span>R. Price      : {{ $item->regular_price }}</span> <br />
                                            <span>S. Price      : {{ $item->offer_price }}</span> <br />
                                            <span>T. Discount   : {{ $item->total_discount }}</span> <br />
                                            <span>T. Stock      : {{ $item->total_stock }}</span>
                                        </td>
                                        <td>
                                            <span>Author        : {{ @$item->user->name }}</span>  <br />
                                            @if ($item->brand==NULL)
                                            <span>Brand         : None Brand</span> <br>
                                            @else
                                            <span>Brand         : {{ @$item->brand->name }}</span> <br>
                                            @endif
                                            @if ($item->brand==NULL)
                                            <span>Category      : None Category</span> <br>
                                            @else
                                            <span>Category      : {{ @$item->category->name }}</span> <br>
                                            @endif
                                            <span>Update        : {{ $item->updated_at }}</span> <br>
                                            <span>Created       : {{ $item->created_at }}</span>
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
                                                <a href="{{ route('product.status',$item->id) }}" class="btn btn-danger btn-sm text-light" title="Private">
                                                    <span class="sr-only">Private</span><i class="fa fa-eye-slash"></i>
                                                </a>
                                                @else
                                                <a href="{{ route('product.status',$item->id) }}" class="btn btn-success btn-sm text-light" title="Public">
                                                    <span class="sr-only">Public</span><i class="fa fa-eye"></i>
                                                </a>
                                                @endif
                                                <a href="{{ route('product.edit',$item->id) }}" class="btn btn-success btn-sm text-light" title="Edit">
                                                    <span class="sr-only">Edit</span> <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ route('product.destroy',$item->id) }}" class="btn btn-danger btn-sm text-light" title="Delete">
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
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="bg-dark pt-3 pl-5 col-md-6">
                                <div class="d-flex justify-content-start text-light">
                                    <span class="btn btn-outline-info">Products: {{ count($products) }} </span>
                                </div>
                            </div>
                            <div class="bg-dark pt-3 pr-5 col-md-6">
                                <div class="d-flex justify-content-end">
                                    {{ $products->links() }}
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