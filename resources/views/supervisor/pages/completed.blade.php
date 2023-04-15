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
                                    <th>Group Name</th>
                                    <th>Project Name</th>
                                    <th>Grade</th>
                                    <th>Completion Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($a as $u)
                                    <tr>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ $u->project_name }}</td>
                                        <td>{{ $u->grade }}</td>
                                        <td>{{ $u->updated_at }}</td>
                                        <td><a href="{{ url('/completed_group_info/' . $u->id) }}" class="btn btn-info btn-sm"
                                                role="button">Edit</a></td>
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
