@extends('layouts.client')

@section('title', 'Homepage')

@section('content')

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100"
        style="background: url('{{ asset('client/images/coworking/sliders/1.jpg') }}') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="title-heading text-center">
                        <h3 class="font-weight-normal text-white title-dark mb-4">Welcome to the <br>
                            {{ config('app.name') }}</h3>
                        <p class="text-white">Here, you can monitor and manage the logistics supply levels of your
                            operational units in real-time, ensuring readiness and responsiveness at all times.</p>
                        {{-- <div class="page-next-level">
                            <ul class="page-next mb-0 px-0">
                                <li class="list-inline-item icon-light me-1"><a href="{{ route('homepage') }}"
                                        class="text-white title-dark pe-2">Home</a></li>
                                <li class="list-inline-item me-1">
                                    <span class="text-primary pe-2">About Us</span>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div> <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Logistics Supply Overview -->
    <section class="section bg-danger text-white">
        <div class="container">
            <div class="text-center">
                <h3>Logistics Supply Overview</h3>
                <p class="text-lead">A glance at the essential supplies across all operational units.</p>
            </div>

            <div class="row mt-5 d-flex flex-wrap gap-3">
                <div class="col-md-6 col-sm-12 border border-white p-3 responsive-col" style="flex: 1 1 calc(50% - 1rem);">
                    <h4>Ammunition Levels</h4>
                    <p>Track the current ammunition supply levels across all units to ensure they are well equipped for
                        operations.</p>
                </div>
                <div class="col-md-6 col-sm-12 border border-white p-3 responsive-col" style="flex: 1 1 calc(50% - 1rem);">
                    <h4>POL Supply</h4>
                    <p>Monitor the availability of petroleum, oil, and lubricants to maintain vehicle readiness and
                        operational efficiency.</p>
                </div>
                <div class="col-md-6 col-sm-12 border border-white p-3 responsive-col" style="flex: 1 1 calc(50% - 1rem);">
                    <h4>Rations Overview</h4>
                    <p>Assess the status of food supplies to guarantee that all personnel are adequately nourished for
                        optimal performance.</p>
                </div>
                <div class="col-md-6 col-sm-12 border border-white p-3 responsive-col" style="flex: 1 1 calc(50% - 1rem);">
                    <h4>Medical Supplies</h4>
                    <p>Evaluate the stock of medical supplies to ensure that all units are prepared for any health
                        emergencies that may arise.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Maps & Image Overview -->
    <section class="section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-sm-12">
                    <img src="{{ asset('client/images/maps/map-1.jpeg') }}" alt="Interactive Map" class="img-fluid">
                </div>
                <div class="col-md-4 col-sm-12">
                    <h4>Interactive Map</h4>
                    <p>Utilize the interactive map to view logistics status at various headquarters, making it easier to
                        identify areas needing immediate attention.</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-8 col-sm-12">
                    <img src="{{ asset('client/images/maps/map-2.jpeg') }}" alt="Supply Heat Map" class="img-fluid">
                </div>
                <div class="col-md-4 col-sm-12">
                    <h4>Supply Heat Map</h4>
                    <p>The heat map feature highlights areas with critically low supplies, allowing for swift
                        decision-making and resource allocation.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <img src="{{ asset('client/images/maps/map-3.jpeg') }}" alt="Unit Status Indicators" class="img-fluid">
                </div>
                <div class="col-md-4 col-sm-12">
                    <h4>Unit Status Indicators</h4>
                    <p>Each unit's status is clearly marked, providing an at-a-glance understanding of supply levels and
                        operational readiness.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Logistics Supply Overview -->
    <section class="section bg-danger text-white">
        <div class="container">
            <div class="text-center">
                <h3>Critical Supply Alerts</h3>
                <p class="text-lead">Stay informed about urgent supply shortages to ensure timely intervention.</p>
            </div>

            <div class="row d-flex align-items-center mt-5">
                <div class="col-md-4 col-sm-12">
                    <img src="{{ asset('client/images/maps/ammunition.jpg') }}" alt="Interactive Map" class="img-fluid">
                </div>
                <div class="col-md-8 col-sm-12">
                    <h4>Ammunition Shortage Alert</h4>
                    <p>Several units have reported a critical shortage of ammunition. Immediate resupply is recommended to
                        maintain operational effectiveness.</p>
                </div>
            </div>

            <div class="row d-flex align-items-center mt-5">
                <div class="col-md-4 col-sm-12">
                    <img src="{{ asset('client/images/maps/rations.jpg') }}" alt="Interactive Map" class="img-fluid">
                </div>
                <div class="col-md-8 col-sm-12">
                    <h4>Rations Low Alert</h4>
                    <p>Multiple operational units are nearing their ration limits. Action is needed to prevent any
                        disruption in personnel sustenance.</p>
                </div>
            </div>

            <div class="row d-flex align-items-center mt-5">
                <div class="col-md-4 col-sm-12">
                    <img src="{{ asset('client/images/maps/medical.jpg') }}" alt="Interactive Map" class="img-fluid">
                </div>
                <div class="col-md-8 col-sm-12">
                    <h4>Medical Supply Alert</h4>
                    <p>A few units are experiencing low levels of medical supplies. Prompt resupply is crucial to ensure the
                        health and safety of all personnel.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-100">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-4">Logistics Updates Feed</h4>
                    <p class="text-muted mx-auto para-desc mb-0">Stay updated with the latest reports from operational units regarding their logistics status.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="blog-post shadow rounded position-relative overflow-hidden">
                    <div class="blog-img overflow-hidden position-relative">
                        <img src="{{ asset('client/images/maps/medical.jpg') }}" class="img-fluid" alt="">
                        <div class="overlay"></div>
                        <div class="d-flex author-desc align-items-center">
                            <img src="images/client/05.jpg" class="img-fluid avatar avatar-md-sm rounded-pill me-2 shadow"
                                alt="">
                        </div>
                    </div>
                    <div class="position-relative">
                        <div class="shape overflow-hidden text-white">
                            <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="blog-content p-4">
                        <h5><a href="javascript:void(0)" class="title text-dark">LOG BASE 1 in Warri Supplies Increased</a></h5>

                        <div class="post-meta d-flex justify-content-between pt-3 border-top">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-dark like me-2"><i
                                            data-feather="heart" class="fea icon-sm like-icon me-1"></i>36</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-dark comment"><i
                                            data-feather="message-circle" class="fea icon-sm me-1"></i>08</a></li>
                            </ul>
                            <a href="javascript:void(0)" class="text-dark read">Read More <i
                                    class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!--end post-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

@endsection