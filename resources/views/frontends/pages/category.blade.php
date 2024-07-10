@extends('frontends.master')
@section('page_title')
   <title>{{ $category->name }} - Multipurpose eCommerce Flatform</title>
@endsection
@section('front_layouts')
<div class="page-header mt-30 mb-50">
    <div class="container">
        <div class="archive-header">
            <div class="row align-items-center">
                <div class="col-xl-3">
                    <div class="breadcrumb">
                        <a href="{{ route('home') }}" rel='nofollow'><i class="fi-rs-home mr-5"></i>Home</a>
                        <span></span> Shop <span></span> {{ $category->name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mb-30">
    <div class="row flex-row-reverse">
        <div class="col-lg-4-5">
            {{-- Data Fillter --}}
            <div class="shop-product-fillter">
                <div class="totall-product">
                    <p>We found <strong class="text-brand">{{ count($products) }}</strong> items for you!</p>
                </div>
                <div class="sort-by-product-area">
                    <div class="sort-by-cover mr-10">
                        <div class="sort-by-product-wrap">
                            <div class="sort-by">
                                <span><i class="fi-rs-apps"></i>Show:</span>
                            </div>
                            <div class="sort-by-dropdown-wrap">
                                <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                            </div>
                        </div>
                        <div class="sort-by-dropdown">
                            <ul>
                                <li><a class="active" href="#">50</a></li>
                                <li><a href="#">100</a></li>
                                <li><a href="#">150</a></li>
                                <li><a href="#">200</a></li>
                                <li><a href="#">All</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sort-by-cover">
                        <div class="sort-by-product-wrap">
                            <div class="sort-by">
                                <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                            </div>
                            <div class="sort-by-dropdown-wrap">
                                <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                            </div>
                        </div>
                        <div class="sort-by-dropdown">
                            <ul>
                                <li><a class="active" href="#">Featured</a></li>
                                <li><a href="#">Price: Low to High</a></li>
                                <li><a href="#">Price: High to Low</a></li>
                                <li><a href="#">Release Date</a></li>
                                <li><a href="#">Avg. Rating</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Data Fillter --}}


            <div class="row product-grid">
                @foreach ($products as $product)
                <div class="col-lg-1-4 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product_details',$product->slug) }}">
                                    <img class="default-img" src="{{ asset($product->thumb) }}" width="100" alt="" />
                                    <img class="hover-img" src="{{ asset($product->thumb) }}" width="100" alt="" />
                                </a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="new">Stock {{ $product->total_stock }}</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2>
                                <a href="{{ route('product_details',$product->slug) }}">{{ $product->title }}</a>
                            </h2>
                            <div>
                                <span class="font-small text-muted">
                                    <span>Sold By </span>
                                    <a href='vendor-details-1.html'>{{ @$product->user->name }}</a>
                                </span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>৳ {{ $product->offer_price }}</span>
                                    <span class="old-price">৳ {{ $product->regular_price }}</span>
                                </div>
                                <div class="add-cart">
                                    <a class='add' href="{{ route('product_details',$product->slug) }}">
                                        <i class="fi-rs-shopping-cart mr-5"></i><span>Add</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--end product card-->
            </div>
            <!--product grid-->
            <div class="pagination-area mt-20 mb-20">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        {{ $products->links() }}
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-lg-1-5 primary-sidebar sticky-sidebar">
            <div class="sidebar-widget widget-category-2 mb-30">
                <h5 class="section-title style-1 mb-30">Category</h5>
                <ul>
                    <li>
                        <a href='shop-grid-right.html'> <img src="assets/imgs/theme/icons/category-1.svg" alt="" />Milks & Dairies</a><span class="count">30</span>
                    </li>
                    <li>
                        <a href='shop-grid-right.html'> <img src="assets/imgs/theme/icons/category-2.svg" alt="" />Clothing</a><span class="count">35</span>
                    </li>
                    <li>
                        <a href='shop-grid-right.html'> <img src="assets/imgs/theme/icons/category-3.svg" alt="" />Pet Foods </a><span class="count">42</span>
                    </li>
                    <li>
                        <a href='shop-grid-right.html'> <img src="assets/imgs/theme/icons/category-4.svg" alt="" />Baking material</a><span class="count">68</span>
                    </li>
                    <li>
                        <a href='shop-grid-right.html'> <img src="assets/imgs/theme/icons/category-5.svg" alt="" />Fresh Fruit</a><span class="count">87</span>
                    </li>
                </ul>
            </div>
            <!-- Fillter By Price -->
            <div class="sidebar-widget price_range range mb-30">
                <h5 class="section-title style-1 mb-30">Fill by price</h5>
                <div class="price-filter">
                    <div class="price-filter-inner">
                        <div id="slider-range" class="mb-20"></div>
                        <div class="d-flex justify-content-between">
                            <div class="caption">From: <strong id="slider-range-value1" class="text-brand"></strong></div>
                            <div class="caption">To: <strong id="slider-range-value2" class="text-brand"></strong></div>
                        </div>
                    </div>
                </div>
                <div class="list-group">
                    <div class="list-group-item mb-10 mt-10">
                        <label class="fw-900">Color</label>
                        <div class="custome-checkbox">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                            <label class="form-check-label" for="exampleCheckbox1"><span>Red (56)</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>Green (78)</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="" />
                            <label class="form-check-label" for="exampleCheckbox3"><span>Blue (54)</span></label>
                        </div>
                        <label class="fw-900 mt-15">Item Condition</label>
                        <div class="custome-checkbox">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="" />
                            <label class="form-check-label" for="exampleCheckbox11"><span>New (1506)</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox21" value="" />
                            <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished (27)</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox31" value="" />
                            <label class="form-check-label" for="exampleCheckbox31"><span>Used (45)</span></label>
                        </div>
                    </div>
                </div>
                <a class='btn btn-sm btn-default' href='shop-grid-right.html'><i class="fi-rs-filter mr-5"></i> Fillter</a>
            </div>
        </div>
    </div>
</div>
@endsection