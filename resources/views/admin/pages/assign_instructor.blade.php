@extends('admin.layouts.defult')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    <h4 class="card-title">Group Info</h4>
                    <form action="{{ url('update_group/' . $group->id) }}" method="post">
                        @csrf
                        <div class="info">
                            <h5>Group Name: </h5>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="{{ $group->name }}">
                            </div>
                        </div>
                        <div>
                            <h6>Group Instrucor: </h6>
                            <div class="form-group">
                                <select name="instructor_id" id="" class="form control">
                                    <option value="">Instructor Name</option>
                                    @foreach ($teacher as $t)
                                        <option value="{{ $t->id }}">{{ $t->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h6>Project Name:</h6>
                            <input type="text" name="project_name" class="form-control"
                                value="{{ $group->project_name }}">
                            <p></p>
                            <h6>Grade:</h6>
                            <input type="text" name="grade" class="form-control" value="{{ $group->grade }}">

                        </div>
                        <div class="table-responsive">
                            <h4>Group Members</h4>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact No</th>
                                        <th>Batch</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($std_detailes as $u)
                                        <tr>
                                            <td>{{ $u->std_ID }}</td>
                                            <td>{{ $u->name }}</td>
                                            <td>{{ $u->email }}</td>
                                            <td>{{ $u->contact_no }}</td>
                                            <td>{{ $u->batch }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <button type="submit" class="btn btn-dark me-2 btn-rounded">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
