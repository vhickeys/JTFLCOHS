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
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="popular-course rounded-md shadow position-relative overflow-hidden">
                        <img src="{{ asset('client/images/maps/ammunition-status.webp') }}" class="img-fluid" alt="">
                        <div class="content p-3 text-center">
                            <h5 class="mt-2"><a href="javascript:void(0)" class="title text-dark">Educational
                                    Communication</a></h5>
                            <p class="text-muted">Monitor the current levels of ammunition across all operation units to
                                ensure readiness and operational capability.
                            </p>
                            <a href="javascript:void(0)" class="btn btn-pills btn-primary">View Details <i
                                    data-feather="arrow-right" class="fea icon-sm"></i></a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="popular-course rounded-md shadow position-relative overflow-hidden">
                        <img src="{{ asset('client/images/maps/pol.webp') }}" class="img-fluid" alt="">
                        <div class="content p-3 text-center">
                            <h5 class="mt-2"><a href="javascript:void(0)" class="title text-dark">POL Inventory</a></h5>
                            <p class="text-muted">Track petroleum, oil, and lubricants inventory to maintain vehicle and
                                equipment functionality in the field.
                            </p>
                            <a href="javascript:void(0)" class="btn btn-pills btn-primary">Check Levels<i
                                    data-feather="arrow-right" class="fea icon-sm"></i></a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="popular-course rounded-md shadow position-relative overflow-hidden">
                        <img src="{{ asset('client/images/maps/ammunition-status.webp') }}" class="img-fluid" alt="">
                        <div class="content p-3 text-center">
                            <h5 class="mt-2"><a href="javascript:void(0)" class="title text-dark">Rations Availability</a>
                            </h5>
                            <p class="text-muted">Assess the availability of food supplies to guarantee that personnel are
                                adequately nourished during operations.
                            </p>
                            <a href="javascript:void(0)" class="btn btn-pills btn-primary">See Rations <i
                                    data-feather="arrow-right" class="fea icon-sm"></i></a>
                        </div>
                    </div>
                </div><!--end col-->

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

    <!-- Contact Start -->
    <section class="section pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="shadow rounded p-4">
                        <h3>Request Additional Supplies</h3>
                        <p class="mb-0">Submit requests for immediate reinforcement of essential logistics supplies.</p>
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