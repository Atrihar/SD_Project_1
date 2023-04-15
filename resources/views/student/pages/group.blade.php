@extends('student.layouts.defult')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">My Group</h4>
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

    </div>
@endsection
