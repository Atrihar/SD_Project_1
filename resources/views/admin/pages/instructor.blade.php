@extends('admin.layouts.defult')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Instructors Info</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact No</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($users as $u)
                                    @if ($u->role != 'Admin')
                                        <tr>
                                            <td>{{ $u->name }}</td>
                                            <td>{{ $u->email }}</td>
                                            <td>{{ $u->contact_no }}</td>
                                            <td><a href="{{ url('/edit_instructor/' . $u->id) }}"
                                                    class="btn btn-primary btn-sm" role="button">Edit</a></td>
                                            <td><a href="{{ url('/delete_instructor/' . $u->id) }}"
                                                    class="btn btn-danger btn-sm" role="button">Delete</a></td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>



                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
