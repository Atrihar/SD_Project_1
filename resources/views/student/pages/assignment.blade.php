@extends('student.layouts.defult')

@section('content')
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Assignment</h4>
                        <div class="info">
                            <h6>finished 14, &emsp; left 5</h6>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Due</th>
                                    <th>Submission Date</th>
                                    <th>Status</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($assignment_info as $a)
                                    <td>{{ $a->name }}</td>
                                    <td>{{ $a->due }}</td>
                                    <td>{{ $a->submission }}</td>
                                    <td>{{ $a->status }}</td>
                                    <td>{{ $a->grade }}</td>
                                    <td>
                                        {{-- {{ url('/edit_instructor/' . $u->id) }} --}}
                                        <a href="{{ url('/view/' . $a->id) }}" class="btn btn-info btn-sm" role="button">View</a>
                                    </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
