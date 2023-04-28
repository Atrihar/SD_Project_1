@extends('student.pages.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Assignment Name: {{ $assignment_detailes[0]->name }}</h4>


                    <h5>Due: {{ $assignment_detailes[0]->due }}</h5>

                    <p>&nbsp;</p>

                    <h6>Question:</h6>
                    <p>
                        {{ $assignment_detailes[0]->ques }}
                    </p>

                    <p>&nbsp;</p>

                    @if ($assignment_detailes[0]->attachment)
                        <h6>Attachment: </h6>
                        <p>
                            <a target="_blank" href="{{ asset('asset/' . $assignment_detailes[0]->attachment) }}"
                                class="btn btn-rounded btn-outline-dark btn-icon">
                                <i class="ti-email">
                                    View
                                </i>
                            </a>
                        </p>

                        <p>&nbsp;</p>
                    @endif

                    @if ($assignment_detailes[0]->note)
                        <h6>Note:</h6>
                        <p>
                            {{ $assignment_detailes[0]->note }}
                        </p>

                        <p>&nbsp;</p>
                    @endif


                    <h4>Submit here</h4>
                    <form action="{{ url('submit_assignment/' . $assignment_detailes[0]->id) }}"
                        enctype="multipart/form-data" method="post">
                        @csrf
                        @if ($assignment_detailes[0]->ansr)
                            <div class="form-group">
                                <label for="ansr" class="col-sm-3 col-form-label">
                                    <h5>Answer</h5>
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" name="ansr" id="ansr" class="form-control"
                                        placeholder="Type your answer here" value="{{ $assignment_detailes[0]->ansr }}">
                                </div>
                            </div>
                        @else
                            <div class="form-group">
                                <label for="ansr" class="col-sm-3 col-form-label">
                                    <h5>Answer</h5>
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" name="ansr" id="ansr" class="form-control"
                                        placeholder="Type your answer here">
                                </div>
                            </div>
                        @endif


                        @if ($assignment_detailes[0]->ans)
                            <h6>Your previous attachment: </h6>
                            <p>
                                <a target="_blank" href="{{ asset('asset/' . $assignment_detailes[0]->ans) }}"
                                    class="btn btn-rounded btn-outline-dark btn-icon">
                                    <i class="ti-email">
                                        View
                                    </i>
                                </a>
                            </p>

                            <p>&nbsp;</p>
                        @endif
                        <div class="form-group">
                            <input class="form-control" type="file" name="ans" id="ans">
                        </div>

                        <button type="submit" class="btn btn-rounded btn-success">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
