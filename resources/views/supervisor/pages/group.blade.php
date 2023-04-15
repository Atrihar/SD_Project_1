@extends('supervisor.layouts.defult')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Group Info</h4>
                    <div class="info">
                        <h5>Group No: 03 &emsp; Group Name: Ldrago</h5>
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
                                <tr>
                                    <td>1234</td>
                                    <td>Jacob</td>
                                    <td>jacob@gmail.com</td>
                                    <td>234</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>1123</td>
                                    <td>Messsy</td>
                                    <td>Flash@gmial.com</td>
                                    <td>334</td>
                                    <td>33</td>
                                </tr>
                                <tr>
                                    <td>2322</td>
                                    <td>John</td>
                                    <td>Premier@gmail.com</td>
                                    <td>45</td>
                                    <td>36</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

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
                                    <th>ID</th>
                                    <th>Status</th>
                                    <th>Grade</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>abc</td>
                                    <td>File</td>
                                    <td>3.4.23</td>
                                    <td>2.4.13</td>
                                    <td>234</td>
                                    <td>
                                        <label class="badge badge-danger">Not Accepted</label>
                                    </td>
                                    <td>N/A</td>
                                    <td><a href="#" class="btn btn-info btn-sm" role="button">View</a></td>
                                    <td>
                                        <a href="#" class="btn btn-danger btn-sm" role="button">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>abc</td>
                                    <td>file</td>
                                    <td>3.4.23</td>
                                    <td>2.4.13</td>
                                    <td>234</td>
                                    <td>
                                        <label class="badge badge-success">Approved</label>
                                    </td>
                                    <td>A</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm" role="button">View</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-danger btn-sm" role="button">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>abc</td>
                                    <td>file</td>
                                    <td>3.4.23</td>
                                    <td>2.4.13</td>
                                    <td>234</td>
                                    <td>
                                        <label class="badge badge-danger">Not Accepted</label>
                                    </td>
                                    <td>N/A</td>
                                    <td><a href="#" class="btn btn-info btn-sm" role="button">View</a></td>
                                    <td>
                                        <a href="#" class="btn btn-danger btn-sm" role="button">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ url('supervisor/new_task') }}" class="btn btn-warning" role="button">New Task</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
