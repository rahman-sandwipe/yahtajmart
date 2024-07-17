<?php 
    $categories=App\Models\Category::where(['status'=>'public'])->latest()->get();
    $banners=App\Models\Banner::where(['status'=>'public'])->latest()->get();
?>
@extends('frontends.master')
@section('page_title')
    <title>Home :: Best eCommerce Platform of Bangladesh.</title>
@endsection
@section('front_layouts')
<main class="main">

    <section class="home-slider position-relative mb-30">
        @if (count($banners)>0)
        <div class="container">
            <div class="home-slide-cover mt-30">
                <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                    @foreach ($banners as $banner)
                    <div class="single-hero-slider single-animation-wrap" style="background-image: url({{ asset($banner->thumb) }})">
                        <div class="slider-content">
                            <h1 class="display-2 mb-40">
                                Don’t miss amazing<br />
                                grocery deals
                            </h1>
                            <p class="mb-65">Sign up for the daily newsletter</p>
                            <form class="form-subcriber d-flex">
                                <input type="email" name="email" placeholder="Your emaill address" />
                                <button class="btn" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="slider-arrow hero-slider-1-arrow"></div>
            </div>
        </div>
        @else
        <div class="container">
            <div class="home-slide-cover mt-30">
                <p class="text-center">Banner not pound!</p>
            </div>
        </div>
        @endif
    </section>
    <!-- Banner Slider -->

    <section class="popular-categories section-padding">
        <div class="container">
            @if (count($categories)>0)
            <div class="carausel-10-columns-cover position-relative">
                <div class="section-title d-flex justify-content-center">
                    <div class="title">
                        <h3>Featured Categories</h3>
                    </div>
                </div>
                <div class="carausel-10-columns" id="carausel-10-columns">
                    @foreach ($categories as $category)
                    <div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <figure class="img-hover-scale overflow-hidden">
                            <a href="{{ route('category',$category->slug) }}">
                                <img src="{{ asset($category->thumb) }}" />
                            </a>
                        </figure>
                        <h6><a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a></h6>
                        {{-- <span>26 items</span> --}}
                    </div>
                    @endforeach
                </div>
            </div>
            @else
            <div class="section-title d-flex justify-content-center">
                <div class="title">
                    <h3 class="text-danger text-center">There are currently no category assets on this website</h3>
                </div>
            </div>
            @endif             
       </div>
    </section>
    <!--category slider-->

    {{-- recommendProd --}}
    <section class="product-tabs section-padding position-relative">
        <div class="container">
            <div class="section-title d-flex justify-content-center">
                <div class="title">
                    <h3>Recommend Products</h3>
                </div>
            </div>
            <!--End nav-tabs-->
            @if (count($recommendProd)>0)
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row product-grid-4">
                        @foreach ($recommendProd as $recommend)
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('product_details',$recommend->slug) }}">
                                            <img class="default-img" src="{{ asset($recommend->thumb) }}" alt="" />
                                            <img class="hover-img" src="{{ asset($recommend->thumb) }}" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('category',$recommend->slug) }}">{{ $recommend->category->name }}</a>
                                    </div>
                                    <h2><a href="{{ route('product_details', $recommend->slug) }}">{{ $recommend->title }}</a></h2>
                                    <div>
                                        <span class="font-small text-muted">Solded By <a href='vendor-details-1.html'>{{ @$recommend->user->name }}</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>BDT {{ $recommend->offer_price }}</span>
                                            <span class="old-price">BDT {{ $recommend->regular_price }}</span>
                                        </div>
                                    </div>
                                    <a class="btn w-100 hover-up" href="{{ route('addToCart',$recommend->id) }}"><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!--end product card-->
                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab one-->
            </div>
            @else
            <div class="section-title d-flex justify-content-center">
                <div class="title">
                    <h3 class="text-danger">Product not found</h3>
                </div>
            </div>
            @endif
            <!--End tab-content-->
        </div>
    </section>

    {{-- newProd --}}
    <section class="product-tabs section-padding position-relative">
        <div class="container">
            <div class="section-title d-flex justify-content-center">
                <div class="title">
                    <h3>New Products</h3>
                </div>
            </div>
            <!--End nav-tabs-->
            @if (count($newProd)>0)
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row product-grid-4">
                        @foreach ($newProd as $new)
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href={{ route('product_details',$new->slug) }}>
                                            <img class="default-img" src="{{ asset($new->thumb) }}" alt="" />
                                            <img class="hover-img" src="{{ asset($new->thumb) }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">{{ @$new->category->name }}</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    {{-- <div class="product-category">
                                        <a href='shop-grid-right.html'>Snack</a>
                                    </div> --}}
                                    <h2><a href="{{ route('product_details', $new->slug) }}">{{ $new->title }}</a></h2>
                                    <div>
                                        <span class="font-small text-muted">Solded By <a href='vendor-details-1.html'>{{ @$new->user->name }}</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>BDT {{ $new->offer_price }}</span>
                                            <span class="old-price">BDT {{ $new->regular_price }}</span>
                                        </div>
                                    </div>
                                    <a class="btn w-100 hover-up" href="{{ route('addToCart',$new->id) }}"><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!--end product card-->
                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab one-->
            </div>
            @else
            <div class="section-title d-flex justify-content-center">
                <div class="title">
                    <h3 class="text-danger">Product not found</h3>
                </div>
            </div>
            @endif
            <!--End tab-content-->
        </div>
    </section>

    {{-- bestProd --}}
    <section class="product-tabs section-padding position-relative">
        <div class="container">
            <div class="section-title d-flex justify-content-center">
                <div class="title">
                    <h3>Best Products</h3>
                </div>
            </div>
            <!--End nav-tabs-->
            @if (count($bestProd)>0)
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row product-grid-4">
                        @foreach ($bestProd as $best)
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href='shop-product-right.html'>
                                            <img class="default-img" src="{{ asset($best->thumb) }}" alt="" />
                                            <img class="hover-img" src="{{ asset($best->thumb) }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">{{ @$best->category->name }}</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    {{-- <div class="product-category">
                                        <a href='shop-grid-right.html'>Snack</a>
                                    </div> --}}
                                    <h2><a href="{{ route('product_details', $best->slug) }}">{{ $best->title }}</a></h2>
                                    <div>
                                        <span class="font-small text-muted">Solded By <a href='vendor-details-1.html'>{{ @$best->user->name }}</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>BDT {{ $best->offer_price }}</span>
                                            <span class="old-price">BDT {{ $best->regular_price }}</span>
                                        </div>
                                    </div>
                                    <a class="btn w-100 hover-up" href="{{ route('addToCart',$best->id) }}"><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!--end product card-->
                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab one-->
            </div>
            @else
            <div class="section-title d-flex justify-content-center">
                <div class="title">
                    <h3 class="text-danger">Product not found</h3>
                </div>
            </div>
            @endif
            <!--End tab-content-->
        </div>
    </section>

    {{-- saleProd --}}
    <section class="product-tabs section-padding position-relative">
        <div class="container">
            <div class="section-title d-flex justify-content-center">
                <div class="title">
                    <h3>Sale Products</h3>
                </div>
            </div>
            <!--End nav-tabs-->
            @if (count($saleProd)>0)
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row product-grid-4">
                        @foreach ($saleProd as $sale)
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href='shop-product-right.html'>
                                            <img class="default-img" src="{{ asset($sale->thumb) }}" alt="" />
                                            <img class="hover-img" src="{{ asset($sale->thumb) }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">{{ @$sale->category->name }}</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    {{-- <div class="product-category">
                                        <a href='shop-grid-right.html'>Snack</a>
                                    </div> --}}
                                    <h2><a href="{{ route('product_details', $sale->slug) }}">{{ $sale->title }}</a></h2>
                                    <div>
                                        <span class="font-small text-muted">Solded By <a href='vendor-details-1.html'>{{ @$sale->user->name }}</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>BDT {{ $sale->offer_price }}</span>
                                            <span class="old-price">BDT {{ $sale->regular_price }}</span>
                                        </div>
                                    </div>
                                    <a class="btn w-100 hover-up" href="{{ route('addToCart',$sale->id) }}"><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!--end product card-->
                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab one-->
            </div>
            @else
            <div class="section-title d-flex justify-content-center">
                <div class="title">
                    <h3 class="text-danger">Product not found</h3>
                </div>
            </div>
            @endif
            <!--End tab-content-->
        </div>
    </section>
    <!--End banners-->
    <!--Products Tabs-->

    <section class="product-tabs section-padding position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-product-fillter mb-50">
                        <div class="totall-product">
                            <h2>
                                <img class="w-36px mr-10" src="{{ asset('frontends/imgs/theme/icons/category-1.svg') }}" alt="" />
                                Recents Articles
                            </h2>
                        </div>
                        <div class="sort-by-product-area">
                            <a href="{{ route('blog') }}" class="btn btn-warning"><i class="fi-rs-apps mr-5"></i>Show More</a>
                            </div>
                        </div>
                    </div>
                    <div class="loop-grid">
                        <div class="row">
                            @if (count($blogs)>0)
                            @foreach ($blogs as $article)
                            <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                <div class="post-thumb">
                                    <a href="{{ route('blog_details',$article->slug) }}">
                                        <img class="border-radius-15" src="{{ asset($article->thumb) }}" alt="" />
                                    </a>
                                </div>
                                <div class="entry-content-2">
                                    <h4 class="post-title mb-15">
                                        <a href="{{ route('blog_details',$article->slug) }}">{{ $article->headline }}</a>
                                    </h4>
                                    <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                        <div>
                                            <span class="post-on mr-10">{{ $article->created_at->format('d M Y') }}</span>
                                            <span class="hit-count has-dot mr-10">{{ $article->count }} Views</span>
                                            {{-- <span class="hit-count has-dot">4 mins read</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                            @else
                            <div class="section-title d-flex justify-content-center">
                                <h5 class="text-danger">Blog no found!</h5>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection