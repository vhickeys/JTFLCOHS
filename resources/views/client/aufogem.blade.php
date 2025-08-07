@extends('layouts.client')

@section('title', 'Automated Force Generation Model')

@section('content')


    <!-- Hero Start -->
    <section class="bg-half border-bottom d-table w-100"
        style="background: url('client/images/coworking/sliders/1.jpg') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="title-heading text-center">
                        <h3 class="font-weight-normal text-white title-dark mb-4"> Automated Force
                            Generation Model </h3>
                        <div class="page-next-level">
                            <ul class="page-next mb-0 px-0">
                                <li class="list-inline-item icon-light me-1"><a href="{{ route('homepage') }}"
                                        class="text-white title-dark pe-2">Home</a></li>
                                <li class="list-inline-item me-1">
                                    <span class="text-primary pe-2">Automated Force
                                        Generation Model (AUFOGEM)</span>
                                </li>
                            </ul>
                        </div>
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
                                <h3 class="text-center my-5">Input Sub-unit Parameters</h3>
                                <form method="POST" action="{{ route('predict.status') }}">
                                    @csrf
                                    <div class="row">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <strong>Please fix the following errors:</strong>
                                                <ul class="mt-2 mb-0">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Months served in rear unit <span
                                                        class="text-danger">*</span></label>
                                                <input name="rear_months" type="number" value="{{ old('rear_months', 1) }}"
                                                    class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">In-barrack training duration <span
                                                        class="text-danger">*</span></label>
                                                <input name="barrack_training" type="number" value="{{ old('barrack_training', 3.00) }}" step="0.01"
                                                    class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Force/C2 ratio <span
                                                        class="text-danger">*</span></label>
                                                <input name="force_ratio" type="number" value="{{ old('force_ratio', 2.00) }}" step="0.01"
                                                    class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Years C2 has rested outside theatre <span
                                                        class="text-danger">*</span></label>
                                                <input name="c2_rest_years" type="number" value="{{ old('rear_months', 2.00) }}" step="0.01"
                                                    class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Has C2 elements in unit? <span
                                                    class="text-danger">*</span></label>
                                            <div>
                                                <input type="radio" name="has_c2" value="yes" checked> Yes
                                                <input type="radio" name="has_c2" value="no"> No
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Have C2 served in North East? <span
                                                    class="text-danger">*</span></label>
                                            <div>
                                                <input type="radio" name="served_ne" value="yes" checked> Yes
                                                <input type="radio" name="served_ne" value="no"> No
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