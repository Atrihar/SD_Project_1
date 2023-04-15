@extends('supervisor.layouts.auth')

@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    @if (Session::has('info'))
                        <div class="alert alert-info">
                            <strong>{{ Session::get('info') }}</strong>
                        </div>
                    @endif
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{ asset('admin/asset/images/logo.svg') }}" alt="logo">
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="fw-light">Sign in to continue.</h6>
                            <form method="post" action="{{ url('supervisor/SuperLogin') }}" class="pt-3">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="email" name="email"
                                        required placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="password"
                                        name="email" required placeholder="Password">
                                </div>
                                <div class="mt-2">
                                    <button type="submit"
                                        class="btn btn-block btn-primary font-weight-medium auth-form-btn">SIGN IN</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Keep me signed in
                                        </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>
                                <div class="text-center mt-4 fw-light">
                                    Don't have an account? <a href="#" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
