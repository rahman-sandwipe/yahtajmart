@extends('frontends.master')
@section('page_title')
   <title>{{ $blog_details->headline }}</title>
@endsection
@section('front_layouts')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="{{ route('home') }}" rel='nofollow'><i class="fi-rs-home mr-5"></i></a>
            <span></span> <a href="{{ route('category',$blog_details->category->slug) }}">{{ $blog_details->category->name }}</a> <span></span> {{ $blog_details->headline }}
        </div>
    </div>
</div>
<div class="page-content mb-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-11 col-lg-12 m-auto">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="single-page pt-50 pl-30">
                            <div class="single-header style-2">
                                <h6 class="mb-10"><span>Recipes</span></h6>
                                <h2 class="mb-10">{{ $blog_details->headline }}</h2>
                                <div class="single-header-meta">
                                    <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                                        <a class="author-avatar" href="#">
                                            <img class="img-circle" src="{{ asset($blog_details->user->avatar) }}" width="50"/>
                                        </a>
                                        <span class="post-by">Write By <a href="#">{{ $blog_details->user->name }}</a></span>
                                        <span class="post-on has-dot">{{ $blog_details->created_at->format('d M Y') }}</span>
                                        <span class="post-on has-dot">{{ $blog_details->views }} Views</span>
                                    </div>
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li class="mr-5">
                                                <a href="#"><img src="assets/imgs/theme/icons/icon-bookmark.svg" alt="" /></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="assets/imgs/theme/icons/icon-heart-2.svg" alt="" /></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <figure class="single-thumbnail">
                                <img src="{{ asset($blog_details->thumb) }}" alt="Blog thumbnail" />
                            </figure>
                            <div class="single-content">
                                {!! $blog_details->contents !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar pt-50">
                        <div class="widget-area">
                            <div class="sidebar-widget widget-category-2 mb-50">
                                <h5 class="section-title style-1 mb-30">Product Category</h5>
                                <ul>
                                    @foreach ($category as $row)
                                    <li>
                                        <a href="{{ route('category',$row->slug) }}">
                                            <img src="{{ asset($row->thumb) }}" />
                                            <span>{{ $row->name }}</span>
                                        </a>
                                        {{-- <span class="count">30</span> --}}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Product sidebar Widget -->
                            <div class="sidebar-widget product-sidebar mb-50 p-30 bg-grey border-radius-10">
                                <h5 class="section-title style-1 mb-30">Trending Now</h5>
                                @foreach ($products as $product)
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="{{ asset($product->thumb) }}" alt="#" />
                                    </div>
                                    <div class="content pt-10">
                                        <h5>
                                            <a href="{{ route('product_details',$product->slug) }}">
                                                <span>{{ $product->title }}</span>    
                                            </a>
                                        </h5>
                                        <p class="price mb-0 mt-5">৳ {{ $product->offer_price }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="sidebar-widget widget_instagram mb-50">
                                <h5 class="section-title style-1 mb-30">Gallery</h5>
                                <div class="instagram-gellay">
                                    {{-- <ul class="insta-feed"> --}}
                                    <ul class="">
                                        @foreach ($photos as $photo)
                                        <li>
                                            <a href="#">
                                                <img class="border-radius-5" src="{{ asset($photo->thumb) }}" />
                                            </a>
                                        </li>                                           
                                        @endforeach
                                    </ul>
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