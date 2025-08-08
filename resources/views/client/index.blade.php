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

    <!-- Contact Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="shadow rounded p-4">
                        <h3>Request Additional Supplies</h3>
                        <p class="mb-0">Submit requests for immediate reinforcement of essential logistics supplies.</p>
                        <div class="custom-form mt-4 pt-2">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="post" action="{{ route('subimit.log.base.report') }}">
                                @csrf
                                <p id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">LOG BASE <span class="text-danger">*</span></label>
                                            <select class="form-select" name="log_base" aria-label="Default select example">
                                                <option value="" selected disabled>-- Select LOG BASE --</option>
                                                <option value="LOG BASE 1 - (Warri)">LOG BASE 1 - (Warri)</option>
                                                <option value="LOG BASE 2 - (Yenagoa)">LOG BASE 2 - (Yenagoa)</option>
                                                <option value="LOG BASE 3 - (Port Harcourt)">LOG BASE 3 - (Port Harcourt)
                                                </option>
                                                <option value="LOG BASE 4 - (Calabar)">LOG BASE 4 - (Calabar)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Reporting Officer <span
                                                    class="text-danger">*</span></label>
                                            <input name="reporting_officer" id="reporting_officer" type="text"
                                                class="form-control" placeholder="Enter your name">

                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Food Ration Status <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" name="ration_status"
                                                aria-label="Default select example">
                                                <option value="" selected disabled>-- Select Food Ration Status --</option>
                                                <option value="Very High">Very High</option>
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Low">Low</option>
                                                <option value="Critically Low">Critically Low</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">POL Status (Petroleum, Oil and Lubricant) <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" name="pol_status"
                                                aria-label="Default select example">
                                                <option value="" selected disabled>-- Select POL Status --</option>
                                                <option value="Very High">Very High</option>
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Low">Low</option>
                                                <option value="Critically Low">Critically Low</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Ammunition Status <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" name="ammunition_status"
                                                aria-label="Default select example">
                                                <option value="" selected disabled>-- Select Ammunition Status --</option>
                                                <option value="Very High">Very High</option>
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Low">Low</option>
                                                <option value="Critically Low">Critically Low</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Medical supplies <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" name="medical_sup_status"
                                                aria-label="Default select example">
                                                <option value="" selected disabled>-- Select Medical Supplies Status --
                                                </option>
                                                <option value="Very High">Very High</option>
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Low">Low</option>
                                                <option value="Critically Low">Critically Low</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Comments <span class="text-danger">*</span></label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control"
                                                placeholder="Leave a Message :"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
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
                    <p class="text-muted mx-auto para-desc mb-0">Stay updated with the latest reports from operational
                        units
                        regarding their logistics status.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row align-items-center">
            @foreach ($reports as $report)
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="popular-course rounded-md shadow position-relative overflow-hidden">
                        <img src="{{ asset('client/images/maps/' . $report['image']) }}" class="img-fluid"
                            alt="{{ $report['title'] }}">
                        <div class="content p-3 text-center">
                            <h5 class="mt-2"><a href="{{ route('blog.details', ['slug' => $report['slug']]) }}"
                                    class="title text-dark">{{ $report['title'] }}</a></h5>
                            <p class="text-muted">{{ date('d M, Y') }}</p>
                        </div>
                    </div>
                </div><!--end col-->
            @endforeach

        </div><!--end row-->

    </div><!--end container-->

@endsection