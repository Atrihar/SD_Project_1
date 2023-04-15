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
                                    <th>Task</th>
                                    <th>Due</th>
                                    <th>Submission Date</th>
                                    <th>Status</th>
                                    <th>Grade</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>abc</td>
                                    <td>File</td>
                                    <td>3.4.23</td>
                                    <td>2.4.13</td>
                                    <td>
                                        <label class="badge badge-danger">Not Accepted</label>
                                    </td>
                                    <td>N/A</td>
                                    <td><a href="{{ url('student/view') }}" class="btn btn-info btn-sm" role="button">View</a></td>
                                </tr>
                                <tr>
                                    <td>abc</td>
                                    <td>file</td>
                                    <td>3.4.23</td>
                                    <td>2.4.13</td>
                                    <td>
                                        <label class="badge badge-success">Approved</label>
                                    </td>
                                    <td>A</td>
                                    <td>
                                        <a href="{{ url('student/view') }}" class="btn btn-info btn-sm" role="button">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>abc</td>
                                    <td>file</td>
                                    <td>3.4.23</td>
                                    <td>2.4.13</td>
                                    <td>
                                        <label class="badge badge-danger">Not Accepted</label>
                                    </td>
                                    <td>N/A</td>
                                    <td><a href="{{ url('student/view') }}" class="btn btn-info btn-sm" role="button">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
