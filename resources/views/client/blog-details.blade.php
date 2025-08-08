@extends('layouts.client')

@section('title', $report['title'])

@section('content')

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100"
        style="background: url('{{ asset('client/images/maps/' . $report['image']) }}') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="title-heading text-center">
                        <h3 class="font-weight-normal text-white title-dark mb-4">{{ $report['title'] }}</h3>
                        <div class="page-next-level">
                            <ul class="page-next mb-0 px-0">
                                <li class="list-inline-item icon-light me-1"><a href="{{ route('homepage') }}"
                                        class="text-white title-dark pe-2">Home</a></li>
                                <li class="list-inline-item me-1">
                                    <span class="text-primary pe-2">{{ $report['title'] }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="blog-post single-blog-post p-4 shadow rounded position-relative overflow-hidden">
                        <div class="blog-content">
                            <div class="post-meta d-flex justify-content-between mb-4">
                                <div>{{ date('d M, Y') }}</div>
                            </div>

                            <p class="text-muted">{{ $report['content'] }}</p>
                        </div>
                    </div>
                </div><!--end col-->

            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->

@endsection