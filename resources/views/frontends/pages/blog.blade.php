@extends('frontends.master')
@section('page_title')
   <title>Blog & News - Multipurpose eCommerce Flatform</title>
@endsection
@section('front_layouts')
<div class="page-content mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-product-fillter mb-50">
                    <div class="totall-product">
                        <h2>
                            <i class="fa fa-newspaper-o mr-10"></i>
                            <span>Articles</span>
                        </h2>
                    </div>
                    
                </div>
                <div class="loop-grid">
                    <div class="row">
                        @foreach ($blogs as $blog)
                        <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                            <div class="post-thumb">
                                <a href="{{ route('blog_details',$blog->slug) }}">
                                    <img class="border-radius-15" src="{{ $blog->thumb }}" alt="Blog Thumbnail" />
                                </a>
                                <div class="entry-meta">
                                    <button class="btn btn-outline-info btn-sm" type="button">{{ $blog->category->name }}</a>
                                </div>
                            </div>
                            <div class="entry-content-2">
                                <h4 class="post-title mb-15">
                                    <a href="{{ route('blog_details',$blog->slug) }}">{{ $blog->headline }}</a>
                                </h4>
                                <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <span class="post-on mr-10">{{ $blog->created_at->format('d M Y') }}</span>
                                        <span class="hit-count has-dot mr-10">{{ $blog->views }} Views</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
                <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $blogs->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection