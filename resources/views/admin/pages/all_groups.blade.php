@extends('admin.layouts.defult')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Project Groups</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Group Name</th>
                                    <th>Instructor</th>
                                    <th>Grade</th>
                                    <th>Project</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($users as $u)
                                    <tr>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ $u->instructor_id }}</td>
                                        <td>{{ $u->grade }}</td>
                                        <td>{{ $u->project_name }}</td>
                                        <td>
                                            @if ($u->is_approved == 0)
                                                <a href="{{ url('admin/group_approval/' . $u->id) }}">Approve</a>
                                            @else
                                                <label class="badge badge-success">Approved</label>
                                            @endif
                                        </td>

                                        <td><a href="{{ url('/group_info/' . $u->id) }}" class="btn btn-info btn-sm"
                                                role="button">Edit</a></td>
                                        <td><a href="{{ url('/delete_group/' . $u->id) }}" class="btn btn-danger btn-sm"
                                                role="button">Delete</a></td>
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
