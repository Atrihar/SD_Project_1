@extends('admin.layouts.defult')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Admin Registration Form</h3>
                    <form method="post" action="{{ url('admin/admin-register') }}" class="forms-sample">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Username" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contact_no" class="col-sm-3 col-form-label">Contact No</label>
                            <div class="col-sm-9">
                                <input type="text" name="contact_no" class="form-control" id="contact_no"
                                    placeholder="Mobile number" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 col-form-label">Role</label>
                            <div class="col-sm-9">
                                <input type="text" name="role" class="form-control" id="role"
                                    placeholder="Enter Admin" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cnf_passward" class="col-sm-3 col-form-label">Re Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="cnf_passward" class="form-control" id="cnf_passward"
                                    placeholder="Password" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success me-2 btn-rounded">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
