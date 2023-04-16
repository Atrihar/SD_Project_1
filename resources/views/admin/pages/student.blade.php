@extends('admin.layouts.defult')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Student Info</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact No</th>
                                    <th>Batch</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($users as $u)
                                    <tr>
                                        <td>{{ $u->std_ID }}</td>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ $u->email }}</td>
                                        <td>{{ $u->contact_no }}</td>
                                        <td>{{ $u->batch }}</td>

                                        <td><a href="{{ url('/edit_student/' . $u->id) }}" class="btn btn-primary btn-sm" role="button">Edit</a></td>
                                        <td><a href="{{ url('/delete_student/' . $u->id) }}" class="btn btn-danger btn-sm" role="button">Delete</a></td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
