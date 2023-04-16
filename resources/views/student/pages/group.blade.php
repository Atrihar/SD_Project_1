@extends('student.layouts.defult')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">My Group</h4>
                    <div class="info">
                        <h5>Group Name: {{ $group_name[0]->name }}</h5>
                    </div>
                    <div class="table-responsive">
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
                                @foreach ($student_info as $s)
                                <tr>
                                    <td>{{ $s->std_ID }}</td>
                                    <td>{{ $s->name }}</td>
                                    <td>{{ $s->email }}</td>
                                    <td>{{ $s->contact_no }}</td>
                                    <td>{{ $s->batch }}</td>
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
