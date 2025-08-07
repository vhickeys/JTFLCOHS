@extends('layouts.client')

@section('title', 'Reports')

@section('content')

    <div class="container mt-100 mb-5" style="margin-top: 12rem !important">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h2 class="">Monthly Logistics Insights</h2>
                    <p class="text-muted mx-auto para-desc mb-0">An in-depth analysis of our logistics for the past month,
                        ensuring readiness and efficiency.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="container mt-60">
            <div class="row align-items-center">
                @foreach ($reports as $report)
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="popular-course rounded-md shadow position-relative overflow-hidden">
                            <img src="{{ asset('client/images/maps/' .  $report['image']) }}" class="img-fluid" alt="{{ $report['title'] }}">
                            <div class="content p-3 text-center">
                                <h5 class="mt-2"><a href="{{ route('blog.details', ['slug' =>  $report['slug']]) }}" class="title text-dark">{{ $report['title'] }}</a></h5>
                                <p class="text-muted">{{ date('d M, Y') }}</p>
                            </div>
                        </div>
                    </div><!--end col-->
                @endforeach

            </div><!--end row-->
        </div><!--end container-->
    </div><!--end container-->

    <!-- Maps & Image Overview -->
    <section class="section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-sm-12">
                    <img src="{{ asset('client/images/maps/amunition-supply.webp') }}" alt="Interactive Map"
                        class="img-fluid">
                </div>
                <div class="col-md-4 col-sm-12">
                    <h4>Ammunition Supply Metrics</h4>
                    <p>The annual report indicates a steady increase in ammunition supplies, which has positively impacted
                        operational readiness and mission success rates across the board.</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-8 col-sm-12">
                    <img src="{{ asset('client/images/maps/pol-efficiency.webp') }}" alt="Supply Heat Map"
                        class="img-fluid">
                </div>
                <div class="col-md-4 col-sm-12">
                    <h4>POL Efficiency Trends</h4>
                    <p>We observed a remarkable improvement in POL efficiency this year, with units reporting reduced
                        consumption rates while maintaining operational effectiveness.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <img src="{{ asset('client/images/maps/medical-supplies.webp') }}" alt="Unit Status Indicators"
                        class="img-fluid">
                </div>
                <div class="col-md-4 col-sm-12">
                    <h4>Medical Supplies Management</h4>
                    <p>The year-end review highlights advancements in medical supplies management, showcasing increased
                        stock levels and improved distribution processes that have enhanced unit readiness.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-100 mb-5" style="margin-top: 12rem !important">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h2 class="">Unit Logistics Performance Evaluations</h2>
                    <p class="text-muted mx-auto para-desc mb-0">Detailed assessments of logistics management for each
                        operational unit.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="container mt-60">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="popular-course rounded-md shadow position-relative overflow-hidden">
                        <img src="{{ asset('client/images/maps/ammunition-status.webp') }}" class="img-fluid" alt="">
                        <div class="content p-3 text-center">
                            <h5 class="mt-2"><a href="javascript:void(0)" class="title text-dark">LOG BASE 1 in Warri
                                    Performance Review</a></h5>
                            <p class="text-muted">LOG BASE 1 in Warri has demonstrated commendable logistics management,
                                achieving a 95% supply readiness rate. Continuous monitoring is recommended to maintain this
                                level of efficiency.</p>
                        </div>
                    </div>
                </div><!--end col-->

            </div><!--end row-->
        </div><!--end container-->
    </div><!--end container-->

    <!-- Contact Start -->
    <section class="section mt-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="shadow rounded p-4">
                        <h3>Your Feedback Matters</h3>
                        <p class="mb-0">We value your insights and suggestions for enhancing the logistics monitoring
                            system. Please share your thoughts with us.</p>
                        <div class="custom-form mt-4 pt-2">
                            <form method="post">
                                <p id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                            <input name="name" id="name" type="text" class="form-control"
                                                placeholder="Name :">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                            <input name="email" id="email" type="email" class="form-control"
                                                placeholder="Email :">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Subject</label>
                                            <input name="subject" id="subject" class="form-control" placeholder="subject :">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Comments <span class="text-danger">*</span></label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control"
                                                placeholder="Message :"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" id="submit" name="send" class="btn btn-primary">Send
                                                Message</button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form>
                        </div>
                    </div><!--end -->
                </div><!--end col-->

            </div><!--end row-->
        </div><!--end container-->

    </section><!--end section-->
    <!-- Contact End -->

@endsection