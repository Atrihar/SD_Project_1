@extends('supervisor.layouts.defult')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Group name: <strong>{{ $group->name }}</strong> </h4>
                    <p>&nbsp;</p>
                    <h5>Students</h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Batch</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($student as $s)
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
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <h5>Assignments</h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Question</th>
                                    <th>Attachment</th>
                                    <th>Due</th>
                                    <th>Ans</th>
                                    <th>Sumbitted At</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($assignment as $u)
                                    <tr>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ $u->ques }}</td>
                                        <td>{{ $u->attachment }}</td>
                                        <td>{{ $u->due }}</td>
                                        <td>{{ $u->ans }}</td>
                                        <td>{{ $u->submission }}</td>
                                        <td>{{ $u->grade }}</td>
                                        <td><a href="{{ url('/assignment_info/' . $u->id) }}" class="btn btn-info btn-sm"
                                            role="button">view</a></td>

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
