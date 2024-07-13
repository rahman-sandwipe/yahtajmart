@extends('frontends.master')
@section('page_title')
    <title>FAQs :: Yahtaj Mart</title>
@endsection
@section('front_layouts')
<main class="main " id="main-section">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <div class="breadcrumb-item d-inline-block">
                    <a href="{{ route('home') }}"title="Home"> Home </a></div>
                <span></span>
                <div class="breadcrumb-item d-inline-block active">
                    <div itemprop="item"> Faq </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <section class="mt-60 mb-60">
            <div class="ck-content">
                <div>
                    <div class="faqs-list">
                        @foreach ($FAQs as $row)
                        <div class="accordion" id="faq-accordion-0">
                            <div class="card">
                                <div class="card-header" id="heading-faq-0-0">
                                    <h5 class="mb-0 text-left " data-bs-toggle="collapse" data-bs-target="#collapse-faq-0-0">
                                        {{ $row->question }}
                                    </h5>
                                </div>
                                <div id="collapse-faq-0-0" class="collapse" aria-labelledby="heading-faq-0-0" data-parent="#faq-accordion-0">
                                    <div class="card-body"> {!! $row->answer !!}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection