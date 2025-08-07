@extends('layouts.client')

@section('title', 'Contact & Support')

@section('content')

    <div class="container mt-100 mb-5" style="margin-top: 12rem !important">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h2 class="">What Our Users Say</h2>
                    <p class="text-muted mx-auto para-desc mb-0">Real experiences from those on the ground</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="container mt-60">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="popular-course rounded-md shadow position-relative overflow-hidden">
                        <img src="{{ asset('client/images/maps/increased.webp') }}" class="img-fluid" alt="">
                        <div class="content p-3 text-center">
                            <h5 class="mt-2"><a href="javascript:void(0)" class="title text-dark">Increased Efficiency</a>
                            </h5>
                            <p class="text-muted">Users report a significant reduction in the time taken to assess logistics
                                levels and fulfill supply requests, allowing for quicker decision-making in critical
                                situations.</p>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="popular-course rounded-md shadow position-relative overflow-hidden">
                        <img src="{{ asset('client/images/maps/increased.webp') }}" class="img-fluid" alt="">
                        <div class="content p-3 text-center">
                            <h5 class="mt-2"><a href="javascript:void(0)" class="title text-dark">Enhanced Visibility</a>
                            </h5>
                            <p class="text-muted">The dashboard provides an intuitive overview of logistics status, making
                                it easy for commanders to monitor supplies at a glance and take proactive measures.</p>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="popular-course rounded-md shadow position-relative overflow-hidden">
                        <img src="{{ asset('client/images/maps/increased.webp') }}" class="img-fluid" alt="">
                        <div class="content p-3 text-center">
                            <h5 class="mt-2"><a href="javascript:void(0)" class="title text-dark">Streamlined
                                    Communication</a></h5>
                            <p class="text-muted">With real-time updates and notifications, users have noted improved
                                communication between headquarters and operational units, leading to better coordination.
                            </p>
                        </div>
                    </div>
                </div><!--end col-->

            </div><!--end row-->
        </div><!--end container-->
    </div><!--end container-->

    <div class="container mt-60 mb-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h2 class="">Support Resources</h2>
                    <p class="text-muted mx-auto para-desc mb-0">Guides and documentation for seamless operation</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="container mt-60">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="popular-course rounded-md shadow position-relative overflow-hidden">
                        <img src="{{ asset('client/images/maps/ammunition-status.webp') }}" class="img-fluid" alt="">
                        <div class="content p-3 text-center">
                            <h5 class="mt-2"><a href="javascript:void(0)" class="title text-dark">Support Resources
                                    Guides and documentation for seamless operation
                                    User Manual for JOA Logistics Monitoring System</a></h5>
                            <p class="text-muted">August 4, 2025</p>
                        </div>
                    </div>
                </div><!--end col-->

            </div><!--end row-->
        </div><!--end container-->
    </div><!--end container-->

    <!-- Contact Start -->
    <section class="section mt-0 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="shadow rounded p-4">
                        <h5 class="mb-0">Get In Touch !</h5>
                        <div class="custom-form mt-4 pt-2">
                            <form method="post" name="myForm" onsubmit="return validateForm()">
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

                <div class="col-lg-6 col-md-6 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                            style="border:0" allowfullscreen></iframe>
                    </div><!--end map-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Contact End -->

@endsection