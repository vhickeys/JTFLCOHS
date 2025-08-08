@extends('layouts.client')

@section('title', 'Training Resources')

@section('content')

    <div class="container mt-100 mb-5" style="margin-top: 12rem !important">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h2 class="">User Guide to Joint Task Force Logistics Component Operation Hard SWARM Monitoring</h2>
                    <p class="text-muted mx-auto para-desc mb-0">Navigate the complexities of logistics management with
                        ease.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row align-items-center">
            @foreach ($guides as $guide)
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="popular-course rounded-md shadow position-relative overflow-hidden">
                        <img src="{{ asset('client/images/maps/placeholder.webp') }}" class="img-fluid"
                            alt="{{ $guide['title'] }}">
                        <div class="content p-3 text-center">
                            <h5 class="mt-2"><a href="{{ route('blog.details', ['slug' => $guide['slug']]) }}"
                                    class="title text-dark">{{ $guide['title'] }}</a></h5>
                            <p class="text-muted">{{ date('d M, Y') }}</p>
                        </div>
                    </div>
                </div><!--end col-->
            @endforeach

        </div><!--end row-->
    </div><!--end container-->

    <!-- Maps & Image Overview -->
    <section class="section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-sm-12">
                    <img src="{{ asset('client/images/maps/swarm.webp') }}" alt="Interactive Map" class="img-fluid">
                </div>
                <div class="col-md-4 col-sm-12">
                    <h4>Introduction to the Joint Task Force Logistics Component Operation Hard SWARM Monitoring System</h4>
                    <p>This video provides a thorough introduction to the JOA Logistics Monitoring System, showcasing its
                        purpose, features, and how it can benefit logistics management within military operations. Users
                        will gain insights into the interface and functionalities, making it easier to get started.</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-8 col-sm-12">
                    <img src="{{ asset('client/images/maps/input.webp') }}" alt="Supply Heat Map" class="img-fluid">
                </div>
                <div class="col-md-4 col-sm-12">
                    <h4>How to Input Logistics Data</h4>
                    <p>In this instructional video, users are guided through the process of inputting logistics data into
                        the system. The tutorial covers the steps involved in updating supply levels for various categories,
                        ensuring that all units maintain accurate and up-to-date information on their logistics.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <img src="{{ asset('client/images/maps/dashboard.webp') }}" alt="Unit Status Indicators"
                        class="img-fluid">
                </div>
                <div class="col-md-4 col-sm-12">
                    <h4>Understanding the Dashboard Analytics</h4>
                    <p>This video tutorial explains how to interpret the analytics presented on the Joint Task Force
                        Logistics Component Operation Hard SWARM Monitoring dashboard. Viewers will learn how to analyze
                        supply levels, identify trends, and utilize the data to make informed decisions about resource
                        allocation and reinforcement.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- FAQ Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h2 class="">Common Inquiries</h2>
                        <p class="text-muted mx-auto para-desc mb-0">Your questions answered for a smoother experience.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="general-que" role="tabpanel"
                            aria-labelledby="general-question">
                            <div class="accordion" id="generalquestion">
                                <div class="accordion-item border-0 rounded shadow overflow-hidden">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-0 bg-light" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            What types of logistics can be tracked with the system?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse border-0 collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#generalquestion">
                                        <div class="accordion-body text-muted bg-white">
                                            The Joint Task Force Logistics Component Operation Hard SWARM Monitoring System
                                            allows users to track various logistics categories, including ammunition, POL
                                            (Petroleum, Oil, and Lubricants), rations, medical supplies, water, and spare
                                            parts. This comprehensive tracking ensures that all essential supplies are
                                            monitored, allowing for proactive management and timely reinforcements.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item border-0 rounded shadow overflow-hidden mt-2">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button border-0 bg-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            How do I report low supply levels?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse border-0 collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#generalquestion">
                                        <div class="accordion-body text-muted bg-white">
                                            To report low supply levels, unit headquarters can log into the system and
                                            update their current inventory status directly on the dashboard. The system is
                                            designed to facilitate easy input of supply data, ensuring that all commanders
                                            have real-time visibility of logistics levels and can act accordingly.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item border-0 rounded shadow overflow-hidden mt-2">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button border-0 bg-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Can I receive alerts for low stock levels?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse border-0 collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#generalquestion">
                                        <div class="accordion-body text-muted bg-white">
                                            Yes, the JOA Logistics Monitoring System includes an alert feature that notifies
                                            commanders when supply levels fall below predefined thresholds. This proactive
                                            approach allows commanders to take timely action to reinforce their units,
                                            preventing shortages before they impact operations.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- FAQ Start -->

@endsection