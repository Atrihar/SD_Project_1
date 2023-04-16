@extends('supervisor.layouts.defult')

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
                                    <th>Project Name</th>
                                    <th>Last Assesment</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($a as $u)
                                    <tr>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ $u->project_name }}</td>
                                        <td>{{ $u->updated_at }}</td>
                                        <td>
                                            <a href="{{ url('/running_group_info/' . $u->id) }}" class="btn btn-info btn-sm" role="button">Info</a>
                                        </td>
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
