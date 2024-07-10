@extends('frontends.master')
@section('page_title')
   <title>{{ $product->title }}</title>
@endsection
@section('front_layouts')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="{{ route('home') }}" rel='nofollow'><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span> <a href="{{ route('category',$product->category->slug) }}">{{ $product->category->name }}</a> <span></span> {{ $product->title }}
        </div>
    </div>
</div>
<div class="container mb-30">
    <div class="row">
        <div class="col-xl-10 col-lg-12 m-auto">
            <div class="product-detail accordion-detail">
                <div class="row mb-50 mt-30">
                    <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                        <div class="detail-gallery">
                            <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                            <!-- MAIN SLIDES -->
                            <div class="product-image-slider">
                                <figure class="border-radius-10">
                                    <img src="{{ asset($product->thumb) }}" width="600" alt="product image" />
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{ asset($product->thumb) }}" width="600" alt="product image" />
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{ asset($product->thumb) }}" width="600" alt="product image" />
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{ asset($product->thumb) }}" width="600" alt="product image" />
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{ asset($product->thumb) }}" width="600" alt="product image" />
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{ asset($product->thumb) }}" width="600" alt="product image" />
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{ asset($product->thumb) }}" width="600" alt="product image" />
                                </figure>
                            </div>
                            <!-- THUMBNAILS -->
                            <div class="slider-nav-thumbnails">
                                <div><img src="{{ asset($product->thumb) }}" alt="product image" /></div>
                                <div><img src="{{ asset($product->thumb) }}" alt="product image" /></div>
                                <div><img src="{{ asset($product->thumb) }}" alt="product image" /></div>
                                <div><img src="{{ asset($product->thumb) }}" alt="product image" /></div>
                                <div><img src="{{ asset($product->thumb) }}" alt="product image" /></div>
                                <div><img src="{{ asset($product->thumb) }}" alt="product image" /></div>
                                <div><img src="{{ asset($product->thumb) }}" alt="product image" /></div>
                            </div>
                        </div>
                        <!-- End Gallery -->
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="detail-info pr-30 pl-30">
                            <span class="stock-status out-stock">
                                {{-- @if (count($product->total_stock)>5) --}}
                                    Sale Off
                                {{-- @else --}}
                                    {{-- Low Stock --}}
                                {{-- @endif  --}}
                            </span>
                            <h2 class="title-detail">{{ $product->title }}</h2>
                            <div class="clearfix product-price-cover">
                                <div class="product-price primary-color float-left">
                                    <span class="current-price text-brand">৳ {{ $product->offer_price }}</span>
                                    <span>
                                        <span class="save-price font-md color3 ml-15">৳ {{ $product->total_discount }} Off</span>
                                        <span class="old-price font-md ml-15">৳ {{ $product->regular_price }}</span>
                                    </span>
                                </div>
                            </div>
                            <div class="short-desc mb-30">
                                <p class="font-lg">{!! $product->sort_desc !!}</p>
                            </div>
                            <div class="attr-detail attr-size mb-30">
                                <strong class="mr-10">Size / Weight: </strong>
                                <ul class="list-filter size-filter font-small">
                                    <li><a href="#">{{ $product->width_or_size }}</a></li>
                                </ul>
                            </div>
                            <div class="detail-extralink mb-50">
                                <div class="detail-qty border radius">
                                    <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                    <input type="text" name="quantity" class="qty-val" value="1" min="1">
                                    <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                </div>
                                <div class="product-extra-link2">
                                    <button type="submit" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Bye Now</button>
                                    <button type="submit" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                            <div class="font-xs">
                                <ul class="mr-50 float-start">
                                    <li class="mb-5">Type: <span class="text-brand">Organic</span></li>
                                    <li class="mb-5">MFG:<span class="text-brand"> {{ $product->created_at->format('d M Y') }}</span></li>
                                    <li>LIFE: <span class="text-brand">3 weeks easy return</span></li>
                                </ul>
                                <ul class="float-start">
                                    <li class="mb-5">SKU: <span  class="text-brand ml-5">{{ $product->product_id }}<span></li>
                                    <li class="mb-5">Tags:
                                        {{-- <a href="#" rel="tag">{{ $product->s_tags }}</a> --}}
                                    </li>
                                    <li>Stock:<span class="in-stock text-brand ml-5">{{ $product->total_stock }} Items In Stock</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Detail Info -->
                    </div>
                </div>
                <div class="product-info">
                    <div class="tab-style3">
                        <ul class="nav nav-tabs text-uppercase">
                            <li class="nav-item">
                                <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info">Additional info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Vendor-info-tab" data-bs-toggle="tab" href="#Vendor-info">Vendor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews (3)</a>
                            </li>
                        </ul>
                        <div class="tab-content shop_info_tab entry-main-content">
                            <div class="tab-pane fade show active" id="Description">
                                <div>{!! $product->description !!}</div>
                            </div>
                            <div class="tab-pane fade" id="Additional-info">
                                {!! $product->aditional_info !!}
                            </div>
                            <div class="tab-pane fade" id="Vendor-info">
                                <div class="vendor-logo d-flex mb-30">
                                    <img src="{{ asset(@$product->user->avatar) }}" />
                                    <div class="vendor-name ml-15">
                                        <h6>
                                            <a href="">{{ @$product->user->name }}</a>
                                        </h6>
                                        {{-- <div class="product-rate-cover text-end">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                        </div> --}}
                                    </div>
                                </div>
                                <ul class="contact-infor mb-50">
                                    <li>
                                        <img src="assets/imgs/theme/icons/icon-location.svg" alt="" />
                                        <strong>Address: </strong>
                                        <span>{{ @$product->user->address }}</span>
                                    </li>
                                    <li>
                                        <img src="assets/imgs/theme/icons/icon-contact.svg" alt="" />
                                        <strong>Contact Seller:</strong>
                                        <span>{{ @$product->user->number }}</span>
                                    </li>
                                </ul>
                                <p>This site is under cunstrution</p>
                            </div>
                            <div class="tab-pane fade" id="Reviews">
                                {{-- <!--Comments-->
                                <div class="comments-area">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h4 class="mb-30">Customer questions & answers</h4>
                                            <div class="comment-list">
                                                <div class="single-comment justify-content-between d-flex mb-30">
                                                    <div class="user justify-content-between d-flex">
                                                        <div class="thumb text-center">
                                                            <img src="assets/imgs/blog/author-2.png" alt="" />
                                                            <a href="#" class="font-heading text-brand">Sienna</a>
                                                        </div>
                                                        <div class="desc">
                                                            <div class="d-flex justify-content-between mb-10">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="font-xs text-muted">December 4, 2024 at 3:12 pm </span>
                                                                </div>
                                                                <div class="product-rate d-inline-block">
                                                                    <div class="product-rating" style="width: 100%"></div>
                                                                </div>
                                                            </div>
                                                            <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi repudiandae minus ab deleniti totam officia id incidunt? <a href="#" class="reply">Reply</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-comment justify-content-between d-flex mb-30 ml-30">
                                                    <div class="user justify-content-between d-flex">
                                                        <div class="thumb text-center">
                                                            <img src="assets/imgs/blog/author-3.png" alt="" />
                                                            <a href="#" class="font-heading text-brand">Brenna</a>
                                                        </div>
                                                        <div class="desc">
                                                            <div class="d-flex justify-content-between mb-10">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="font-xs text-muted">December 4, 2024 at 3:12 pm </span>
                                                                </div>
                                                                <div class="product-rate d-inline-block">
                                                                    <div class="product-rating" style="width: 80%"></div>
                                                                </div>
                                                            </div>
                                                            <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi repudiandae minus ab deleniti totam officia id incidunt? <a href="#" class="reply">Reply</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-comment justify-content-between d-flex">
                                                    <div class="user justify-content-between d-flex">
                                                        <div class="thumb text-center">
                                                            <img src="assets/imgs/blog/author-4.png" alt="" />
                                                            <a href="#" class="font-heading text-brand">Gemma</a>
                                                        </div>
                                                        <div class="desc">
                                                            <div class="d-flex justify-content-between mb-10">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="font-xs text-muted">December 4, 2024 at 3:12 pm </span>
                                                                </div>
                                                                <div class="product-rate d-inline-block">
                                                                    <div class="product-rating" style="width: 80%"></div>
                                                                </div>
                                                            </div>
                                                            <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi repudiandae minus ab deleniti totam officia id incidunt? <a href="#" class="reply">Reply</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <h4 class="mb-30">Customer reviews</h4>
                                            <div class="d-flex mb-30">
                                                <div class="product-rate d-inline-block mr-15">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <h6>4.8 out of 5</h6>
                                            </div>
                                            <div class="progress">
                                                <span>5 star</span>
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                            </div>
                                            <div class="progress">
                                                <span>4 star</span>
                                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                            </div>
                                            <div class="progress">
                                                <span>3 star</span>
                                                <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                            </div>
                                            <div class="progress">
                                                <span>2 star</span>
                                                <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                            </div>
                                            <div class="progress mb-30">
                                                <span>1 star</span>
                                                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                            </div>
                                            <a href="#" class="font-xs text-muted">How are ratings calculated?</a>
                                        </div>
                                    </div>
                                </div> --}}
                                <!--comment form-->
                                <div class="comment-form">
                                    <h4 class="mb-15">Add a review</h4>
                                    <div class="product-rate d-inline-block mb-30"></div>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-12">
                                            <form class="form-contact comment_form" action="#" id="commentForm">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control" name="name" id="name" type="text" placeholder="Name" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control" name="email" id="email" type="email" placeholder="Email" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <input class="form-control" name="website" id="website" type="text" placeholder="Website" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="button button-contactForm">Submit Review</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-60">
                    <div class="col-12">
                        <h2 class="section-title style-1 mb-30">Related products</h2>
                    </div>
                    <div class="col-12">
                        <div class="row related-products">
                            @foreach ($related_products as $product)
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='{{ route('product_details',$product->slug) }}'>
                                                <img class="default-img" src="{{ asset($product->thumb) }}" alt="" />
                                                <img class="hover-img" src="{{ asset($product->thumb) }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='shop-grid-right.html'>
                                                <img src="{{ @$product->brand->thumb }}" width="60">
                                            </a>
                                        </div>
                                        <div class="product-category">
                                            <a href="{{ route('category',@$product->category->slug) }}">{{ @$product->category->name }}</a>
                                        </div>
                                        <h2>
                                            <a href="{{ route('product_details',$product->slug) }}">{{ $product->title }}</a>
                                        </h2>
                                        <div>
                                            <span class="font-small text-muted">
                                                <span>Sold By:</span>
                                                <a href='vendor-details-1.html'>{{ @$product->user->name }}</a>
                                            </span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>৳{{ $product->offer_price }}</span>
                                                <span class="old-price">৳{{ $product->regular_price }}</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='shop-cart.html'>
                                                    <i class="fi-rs-shopping-cart mr-5"></i>Add
                                                </a>
                                            </div>
                                        </div>
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
</div>
@endsection