@extends('layouts.client')

@section('title', $base_details['name'] ?? '')

@section('content')

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100"
        style="background: url('{{ asset('client/images/log-bases/' . $base_details['image']) }}') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="title-heading text-center">
                        <h3 class="font-weight-normal text-white title-dark mb-4">{{ $base_details['name'] ?? '' }}</h3>
                        <div class="page-next-level">
                            <ul class="page-next mb-0 px-0">
                                <li class="list-inline-item icon-light me-1"><a href="{{ route('homepage') }}"
                                        class="text-white title-dark pe-2">Home</a></li>
                                <li class="list-inline-item icon-light me-1"><a href="{{ route('reports') }}"
                                        class="text-white title-dark pe-2">Reports</a></li>
                                <li class="list-inline-item me-1">
                                    <span class="text-primary pe-2">{{ $base_details['name'] ?? '' }}</span>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        @forelse ($base_reports as $base_report)
                            <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                <div class="job-listing p-4 rounded shadow position-relative overflow-hidden">
                                    <div class="row align-items-center">
                                        <div class="col-lg-2 col-12">
                                            <div class="text-center text-lg-start">
                                                <img src="{{ asset('client/images/placeholder.jpg') }}"
                                                    class="avatar avatar-small" alt="">
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-10 col-md-12 mt-4 mt-lg-0">
                                            <div class="content text-lg-start">
                                                <h4 class="title"><a href="javascript:void(0)" class="text-dark">Rept.
                                                        Officer: {{ $base_report->reporting_officer ?? '' }}</a></h4>

                                                <div class="d-flex flex-column flex-lg-row gap-3">
                                                    <div>Food Ration: <x-support-system.status-badge
                                                            :status="$base_report->ration_status" />
                                                    </div>
                                                    <div>POL Status: <x-support-system.status-badge
                                                            :status="$base_report->pol_status" />
                                                    </div>
                                                    <div>Ammunition: <x-support-system.status-badge
                                                            :status="$base_report->ammunition_status" />
                                                    </div>
                                                    <div>Medical Supply: <x-support-system.status-badge
                                                            :status="$base_report->medical_sup_status" />
                                                    </div>
                                                </div>

                                                <div class="tagcloud mt-3 text-lg-start">
                                                    <a href="jvascript:void(0)" class="rounded"><i data-feather="message-square"
                                                            class="fea icon-sm me-1"></i>
                                                        <span class="text-muted">Comments:
                                                            {{ $base_report->comments }}</span></a>
                                                </div>

                                            </div>
                                        </div><!--end col-->

                                        {{-- <div class="col-lg-3 col-md-12 mt-3 mt-lg-0">
                                            <a href="javascript:void(0" class="btn w-100 btn-primary">Status: Critical</a>
                                        </div><!--end col--> --}}
                                    </div><!--end row-->
                                    <a href="javascript:void(0)" class="text-danger like"> <i data-feather="heart"
                                            class="fea icon-sm like-icon"></i> </a>
                                </div><!--end feature Job-->
                            </div><!--end col-->

                        @empty

                            <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                <div class="alert alert-info">No report for {{ $base_details['name'] ?? '' }} yet!</div>
                            </div>

                        @endforelse

                            <div class="col-12 mt-4 pt-2">
                                <ul class="pagination justify-content-center mb-0 list-unstyled">
                                    {{ $base_reports->links() }}
                                </ul>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div>
            </div>
    </section>

@endsection