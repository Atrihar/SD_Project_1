@extends('supervisor.layouts.defult')
@section('content')
    <form action="#" method="post">
        @csrf
        <div class="col-md-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Assignment Form</h4>
                    <p class="card-description">
                        Create a new assignment for {{ $group->name }} {{$group->id}}
                    </p>
                    <form method="post" enctype="multipart/form-data" action="{{ url('/crate_assignment' . $group->id) }}" class="forms-sample">
                        @csrf
                        <div class="form-group row">
                            <label for="assignment_name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="assignment_name" name="name"
                                    placeholder="Assignment Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="due_date" class="col-sm-3 col-form-label">Due</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="due" id="due_date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Question</label>
                            <div class="col-sm-9">
                                <textarea name="" id="" cols="30" rows="30"class="form-control" name="ques" id="description"
                                    placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="myfile" class="col-sm-3 col-form-label">Select files:</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="myfile" name="attachment" multiple>
                            </div>
                        </div>
                        <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Are you sure?
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success me-2">Assign</button>
                        <button class="btn btn-danger">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </form>
@endsection
