@extends('supervisor.layouts.auth')
@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        @if (Session::has('info'))
                            <div class="alert alert-info">
                                <strong>{{ Session::get('info') }}</strong>
                            </div>
                        @endif
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{ asset('admin/asset/images/logo.svg') }}" alt="logo">
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="fw-light">Fill this up and create your account.</h6>
                            <form method="POST" action="{{ url('supervisor/super-register') }}" class="pt-3">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="name" name="name"
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
                                    <input type="text" name="role" class="form-control form-control-lg"
                                        placeholder="Enter your role (Lecturer/ Assistant Professor)" id="role">
                                </div>
                                {{-- <div class="form-group">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected name="role" >Designation</option>
                                        <option value="Lecturer">Lecturer</option>
                                        <option value="A_Lecturer">Assistant Lecturer</option>
                                        <option value="A_Professor">Assistant Professor</option>
                                    </select>
                                </div> --}}
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="password"
                                        name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="cnf_password"
                                        name="cnf_password" placeholder="Retype your password">
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
