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
                                            <td><a href="{{ url('/edit_instructor/' . $u->id) }}" class="btn btn-primary btn-sm"
                                                    role="button">Edit</a></td>
                                            <td>
                                                <a data-toggle="modal" data-target="#myModal{{ $u->id }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                                <div class="modal" id="myModal{{ $u->id }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Deleting Confermation</h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure about deleting {{ $u->name }}?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="{{ url('/delete_instructor/' . $u->id) }}"
                                                                    class="btn btn-success">Yes</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
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
