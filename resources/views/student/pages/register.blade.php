@extends('student.layouts.auth')
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
                            <h6 class="fw-light">Fill this up and create your account.</h6>
                            <form method="post" action="{{ url('student/registration') }}" class="pt-3">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="std_id" id="std_id"
                                        placeholder="Student ID">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="name" id="name"
                                        placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" name="email" id="email"
                                        placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="contact_no" class="form-control form-control-lg"
                                        placeholder="Contact No" id="contact_no">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="batch" class="form-control form-control-lg"
                                        placeholder="Batch" id="batch">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password"
                                        id="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="cnf_password"
                                        id="cnf_password" placeholder="Password">
                                </div>
                        </div>
                        <div class="my-2 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <label class="form-check-label text-muted">
                                    <input type="checkbox" class="form-check-input" required> Agree?
                                </label>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
