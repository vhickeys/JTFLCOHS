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
                                <h3 class="text-center my-5">Input Parameters</h3>
                                <form method="POST" action="{{ route('trsm.predict') }}">
                                    @csrf
                                    <div class="row">

                                        {{-- Validation error alert --}}
                                        @if ($errors->any())
                                            <div class="alert alert-danger mt-3">
                                                <strong>Please fix the following errors:</strong>
                                                <ul class="mb-0 mt-2">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Months in Theatre <span
                                                        class="text-danger">*</span></label>
                                                <input name="months_theatre" type="number"
                                                    value="{{ old('months_theatre', 1) }}" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Months Since Last Deployment <span
                                                        class="text-danger">*</span></label>
                                                <input name="months_since_last" type="number"
                                                    value="{{ old('months_since_last', 3.00) }}" class="form-control"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Attacks Repulsed <span
                                                        class="text-danger">*</span></label>
                                                <input name="attacks_repulsed" type="number"
                                                    value="{{ old('attacks_repulsed', 2.00) }}" class="form-control"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Casualty Level <span
                                                        class="text-danger">*</span></label>
                                                <select name="casualty_level" class="form-control" required>
                                                    <option value="">-- Select Casualty Level --</option>
                                                    <option value="Low" {{ old('casualty_level') == 'Low' ? 'selected' : '' }}>Low</option>
                                                    <option value="Medium" {{ old('casualty_level') == 'Medium' ? 'selected' : '' }}>Medium</option>
                                                    <option value="High" {{ old('casualty_level') == 'High' ? 'selected' : '' }}>High</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 mt-3">
                                            <input type="submit" class="btn btn-primary w-100"
                                                value="Predict Deployment Status">
                                        </div>
                                    </div>
                                </form>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- FAQ Start -->

@endsection