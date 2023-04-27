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
                    <p>{{ $assignment_detailes[0]->attachment }}</p>

                    <p>&nbsp;</p>

                    <h6>Ans: </h6>
                    <p><a target="_blank" href="{{ asset('asset/' . $assignment_detailes[0]->ans) }}"
                            class="btn btn-rounded btn-dark btn-icon">
                            <i class="ti-email">
                                View
                            </i>
                        </a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
