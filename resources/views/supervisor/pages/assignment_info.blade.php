@extends('supervisor.layouts.defult')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Assignment Name: {{ $assignment_detailes[0]->name }}</h4>

                    <h5>Due: {{ $assignment_detailes[0]->due }}</h5>

                    <h5>Submission Date: {{ $assignment_detailes[0]->submission }}</h5>

                    <p>&nbsp;</p>

                    <h6>Question:</h6>
                    <p>
                        {{ $assignment_detailes[0]->ques }}
                    </p>

                    <p>&nbsp;</p>

                    <h6>Attachment: </h6>
                    <p>
                        <a target="_blank" href="{{ asset('asset/' . $assignment_detailes[0]->attachment) }}"
                            class="btn btn-rounded btn-dark btn-icon">
                            <i class="ti-email">
                                View
                            </i>
                        </a>
                    </p>

                    <p>&nbsp;</p>

                    <h6>Ans: </h6>
                    @if ($assignment_detailes[0]->ansr)
                        <p>
                            {{ $assignment_detailes[0]->ansr }}
                        </p>
                    @endif

                    @if ($assignment_detailes[0]->ans)
                        <p>
                            <a target="_blank" href="{{ asset('asset/' . $assignment_detailes[0]->ans) }}"
                                class="btn btn-rounded btn-dark btn-icon">
                                <i class="ti-email">
                                    View
                                </i>
                            </a>
                        </p>
                    @endif

                    <p>&nbsp;</p>

                    <form action="{{ url('/check_assignment/' . $assignment_detailes[0]->id) }}" class="forms-sample"
                        method="post">
                        @csrf
                        @if ($assignment_detailes[0]->grade)
                            <div class="form-group">
                                <label for="grade" class="col-sm-3 col-form-label">
                                    <h5>Grade</h5>
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" name="grade" id="grade" class="form-control"
                                        value="{{ $assignment_detailes[0]->grade }}" placeholder="Grade the assignment">
                                </div>
                            </div>
                        @else
                            <div class="form-group">
                                <label for="grade" class="col-sm-3 col-form-label">
                                    <h5>Grade</h5>
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" name="grade" id="grade" class="form-control"
                                        placeholder="Grade the assignment">
                                </div>
                            </div>
                        @endif

                        @if ($assignment_detailes[0]->note)
                            <div class="form-group">
                                <label for="note" class="col-sm-3 col-form-label">
                                    <h5>Note</h5>
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" name="note" id="note" class="form-control"
                                        value="{{ $assignment_detailes[0]->note }}" placeholder="Leave a note here">
                                </div>
                            </div>
                        @else
                            <div class="form-group">
                                <label for="note" class="col-sm-3 col-form-label">
                                    <h5>Note</h5>
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" name="note" id="note" class="form-control"
                                        placeholder="Leave a note here">
                                </div>
                            </div>
                        @endif

                        <button type="submit" class="btn btn-success me-2">Assign</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
