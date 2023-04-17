@extends('supervisor.layouts.defult')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Project Groups</h4>
                    <h5>They Have Done It</h5>
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
                                        <td>{{ $u->updated_at }}</td>
                                        <td>{{ $u->grade }}</td>
                                        <td><a href="{{ url('/assignment_info/' . $u->id) }}" class="btn btn-info btn-sm"
                                                role="button">view</a></td>

                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                        <a href="{{ url('/new_task/' . $x) }}" class="btn btn-info btn-sm" role="button">Create Assignment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
