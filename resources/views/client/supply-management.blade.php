@extends('layouts.client')

@section('title', 'Supply Management')

@section('content')

    <div class="container mt-100" style="margin-top: 12rem !important">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h2 class="">Current Supply Levels</h2>
                    <p class="text-muted mx-auto para-desc mb-0">Real-time tracking of essential supplies</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="container mt-60">
            <div class="row align-items-center">
                @foreach ($supplies as $supply)
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="popular-course rounded-md shadow position-relative overflow-hidden">
                            <img src="{{ asset('client/images/maps/' . $supply['image']) }}" class="img-fluid" alt="{{ $supply['title'] ?? '' }}">
                            <div class="content p-3 text-center">
                                <h5 class="mt-2"><a href="{{ route('blog.details', ['slug' => $supply['slug']]) }}"
                                        class="title text-dark">{{ $supply['title'] ?? '' }}</a></h5>
                                <p class="text-muted">{{ substr($supply['content'] ?? '', 0, 30) }}...</p>
                                <a href="{{ route('blog.details', ['slug' => $supply['slug']]) }}"
                                    class="btn btn-pills btn-primary">View Details <i data-feather="arrow-right"
                                        class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                @endforeach
            </div><!--end row-->
        </div><!--end container-->
    </div><!--end container-->

    <!-- Logistics Supply Overview -->
    <section class="section bg-grey">
        <div class="container">
            <div class="text-center">
                <h2>Supply Chain Insights</h2>
                <p class="text-lead">Analyzing effectiveness in logistics management</p>
            </div>

            <div class="row mt-5 d-flex flex-wrap gap-3">
                <div class="col-md-6 col-sm-12 border border-white p-3 responsive-col" style="flex: 1 1 calc(50% - 1rem);">
                    <h4>Delivery Times</h4>
                    <p>Evaluate how quickly supplies are delivered to operational units, ensuring timely replenishment and
                        mission success.</p>
                </div>
                <div class="col-md-6 col-sm-12 border border-white p-3 responsive-col" style="flex: 1 1 calc(50% - 1rem);">
                    <h4>Stock Turnover</h4>
                    <p>Review how efficiently supplies are utilized and replenished, optimizing inventory management and
                        reducing waste.</p>
                </div>
                <div class="col-md-6 col-sm-12 border border-white p-3 responsive-col" style="flex: 1 1 calc(50% - 1rem);">
                    <h4>Supply Shortages</h4>
                    <p>Identify trends in supply shortages to proactively address potential issues before they affect
                        operations.</p>
                </div>
                <div class="col-md-6 col-sm-12 border border-white p-3 responsive-col" style="flex: 1 1 calc(50% - 1rem);">
                    <h4>Unit Performance</h4>
                    <p>Assess the performance of individual units in managing their logistics, allowing for targeted
                        improvements and support.</p>
                </div>
            </div>

        </div>
    </section>

@endsection