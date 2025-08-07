<!-- Footer Start -->
{{-- <footer class="footer bg-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                <a class="logo-footer" href="#">
                    <img src="images/logo-light.png" height="21" alt="" />
                </a>
                <p class="mt-4">
                    {{ config('app.name') }}
                </p>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h5 class="text-white title-dark footer-head font-weight-normal">
                    Quick Links
                </h5>
                <ul class="list-unstyled footer-list px-0 mt-4">
                    <li>
                        <a href="{{ route('homepage') }}" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i>
                            Homepage</a>
                    </li>
                    <li>
                        <a href="{{ route('unit.login', ['model' => 'aufogem']) }}" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i>
                            About</a>
                    </li>
                    <li>
                        <a href="{{ route('unit.login', ['model' => 'aufogem']) }}" class="text-foot"><i
                                class="mdi mdi-chevron-right me-1"></i>
                            Automated Force Generation Model</a>
                    </li>
                    <li>
                        <a href="{{ route('unit.login', ['model' => 'trsm']) }}" class="text-foot"><i
                                class="mdi mdi-chevron-right me-1"></i>Theatre Readiness Support Model</a>
                    </li>
                    <li>
                        <a href="{{ route('unit.login', ['model' => 'trsm']) }}" class="text-foot"><i
                                class="mdi mdi-chevron-right me-1"></i>Contact</a>
                    </li>
                </ul>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h5 class="text-white title-dark footer-head font-weight-normal">
                    Support
                </h5>
                <ul class="list-unstyled footer-list px-0 mt-4">
                    <li>
                        <i data-feather="map-pin" class="fea icon-sm me-2"></i><a href="#" class="text-foot">Abuja</a>
                    </li>
                    <li>
                        <i data-feather="mail" class="fea icon-sm me-2"></i><a href="mailto:contact@example.com"
                            class="text-foot">support@nafogs.com.ng</a>
                    </li>
                    <li>
                        <i data-feather="phone" class="fea icon-sm me-2"></i><a href="tel:+152534-468-854"
                            class="text-foot">+(234) 1254-5487</a>
                    </li>
                </ul>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</footer> --}}
<!--end footer-->
<footer class="footer bg-footer footer-bar">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="text-sm-start">
                    <p class="mb-0">
                        ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        {{ config('app.name') }}. Built By
                        <a href="http://www.victor.jeapscarhire.ng" target="_blank" class="text-reset">Olvios Tech</a>.
                    </p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</footer>
<!--end footer-->
<!-- Footer End -->

<!-- Modal Content Start -->
<div class="modal fade" id="LoginForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded shadow border-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="login-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" required=""
                                    placeholder="Your Email :" />
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" required="" placeholder="Password :" />
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-12">
                            <div class="d-flex justify-content-between">
                                <div class="mb-3 d-inline-block">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault" />
                                        <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                    </div>
                                </div>
                                <p class="forgot-pass mb-0">
                                    <a href="page-reset-password.html" class="text-dark fw-bold">Forgot password
                                        ?</a>
                                </p>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-12 mb-0">
                            <button class="btn btn-primary w-100">Sign in</button>
                        </div>
                        <!--end col-->
                        <div class="col-12 mt-4 text-center">
                            <h6 class="mb-0">Or Login With</h6>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-6 mt-4">
                                    <a href="#" class="btn w-100 btn-light bg-facebook"><i class="mdi mdi-facebook"></i>
                                        Facebook</a>
                                </div>
                                <div class="col-sm-6 mt-4">
                                    <a href="#" class="btn w-100 btn-light"><i class="mdi mdi-google"></i>
                                        Google</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <p class="mb-0 mt-3">
                                <small class="text-dark me-2">Don't have an account ?</small>
                                <a href="page-signup.html" class="text-dark fw-bold">Sign Up</a>
                            </p>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </form>
                <!--end form-->
            </div>
        </div>
    </div>
</div>
<!-- Modal Content End -->

<!-- Back to top -->
<a href="#" class="back-to-top rounded text-center" id="back-to-top">
    <i class="mdi mdi-chevron-up d-block"></i>
</a>
<!-- Back to top -->


<!-- Javascript -->
<script src="{{ asset('client/js/bootstrap.bundle.min.js') }}"></script>
<!-- Feather icon -->
<script src="{{ asset('client/js/feather.min.js') }}"></script>
<!-- Shuffle and Tobii -->
<script src="{{ asset('client/js/tobii.min.js') }}"></script>
<!-- Swiper -->
<script src="{{ asset('client/js/swiper.min.js') }}"></script>
<script src="{{ asset('client/js/swiper.init.js') }}"></script>
<!-- Switcher js -->
{{--
<script src="{{ asset('client/js/switcher.js') }}"></script> --}}
<!-- Main Js -->
<script src="{{ asset('client/js/app.js') }}"></script>

<script>
    const tobii = new Tobii();
</script>