@extends('admin.layouts.auth')

@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{ asset('admin/asset/images/logo.svg') }}" alt="logo">
                            </div>
                            @if (Session::has('info'))
                                <div class="alert alert-info">
                                    <strong>{{ Session::get('info') }}</strong>
                                </div>
                            @endif
                            <h4>Hello! let's get started</h4>
                            <h6 class="fw-light">Sign in to continue.</h6>
                            <form method="post" action="{{ url('admin/adminLogin') }}" class="pt-3">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-lg" id="email"
                                        placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-lg"
                                        id="password" placeholder="Password" required>
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
