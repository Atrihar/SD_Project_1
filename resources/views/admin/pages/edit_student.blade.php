@extends('admin.layouts.defult')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Edit Student Info</h3>
                    <form action="{{ url('update_student/' . $student->id) }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="name"
                                    value="{{ $student->name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="std_ID" class="col-sm-3 col-form-label">Student ID</label>
                            <div class="col-sm-9">
                                <input type="text" name="std_ID" class="form-control" id="std_ID"
                                    value="{{ $student->std_ID }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="email"
                                    value="{{ $student->email }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contact_no" class="col-sm-3 col-form-label">Contact No</label>
                            <div class="col-sm-9">
                                <input type="text" name="contact_no" class="form-control" id="contact_no"
                                    value="{{ $student->contact_no }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="batch" class="col-sm-3 col-form-label">Batch </label>
                            <div class="col-sm-9">
                                <input type="text" name="batch" class="form-control" id="batch"
                                    value="{{ $student->batch }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success me-2 btn-rounded">update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
