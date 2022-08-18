@extends('client.app')

@section('client_main')
    {{-- @include('admin.style') --}}


    <div class="container">

        <section class="section register d-flex flex-column align-items-center justify-content-center py-4" style="min-height: 60vh;margin-top:10vh">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">


                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>

                                </div>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <input id="email" type="email" placeholder="Email"
                                                class="form-control @error('email') is-invalid @enderror" name="email" required >

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">                                       

                                        <div class="col-md-12">
                                            <input id="password" type="password" placeholder="Password"
                                                class="form-control @error('password') is-invalid @enderror" name="password" required>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row mb-0">
                                        <div class="col-md-12 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </div><br>
                                    <div class="col-12">
                                        <p class="small mb-0">Don't have account? <a href="{{ route('register') }}"
                                                class="btn-link">Create
                                                an account</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                            Developed by <a href="#">Your Name</a>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>

    @include('admin.script')
@endsection
