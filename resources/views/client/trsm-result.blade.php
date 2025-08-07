@extends('layouts.client')

@section('title', 'Theatre Readiness Support Model')

@section('content')


    <!-- Hero Start -->
    <section class="bg-half border-bottom d-table w-100"
        style="background: url('client/images/coworking/sliders/2.jpg') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="title-heading text-center">
                        <h3 class="font-weight-normal text-white title-dark mb-4">Theatre Readiness Support Model (TRSM)
                        </h3>
                        <div class="page-next-level">
                            <ul class="page-next mb-0 px-0">
                                <li class="list-inline-item icon-light me-1"><a href="{{ route('homepage') }}"
                                        class="text-white title-dark pe-2">Home</a></li>
                                <li class="list-inline-item me-1">
                                    <span class="text-primary pe-2">Theatre Readiness Support Model (TRSM)</span>
                                </li>
                            </ul>
                        </div>
                        <p class="text-white text-lead mt-3">This app predicts whether a troop should be recalled or
                            retained based on operational factors. <br>
                            Simply input the details below and click Predict.</p>
                    </div>
                </div> <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->


    <!-- FAQ Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12">
                    <div class="rounded p-4 shadow">
                        <div class="row">
                            <div class="col-12">
                                <div class="mt-5">
                                    <div class="alert alert-{{ $status == 'Deployable' ? 'success' : 'danger' }}">
                                        <h4 class="text-center">{{ $status }}</h4>
                                    </div>

                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <h5 class="card-title">TRSM Prediction Summary</h5>
                                            <ul>
                                                <li>Months in Theatre: {{ $validated['months_theatre'] }}</li>
                                                <li>Months Since Last Deployment: {{ $validated['months_since_last'] }}</li>
                                                <li>Attacks Repulsed: {{ $validated['attacks_repulsed'] }}</li>
                                                <li>Casualty Level: {{ $validated['casualty_level'] }}</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">Back</a>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- FAQ Start -->

@endsection