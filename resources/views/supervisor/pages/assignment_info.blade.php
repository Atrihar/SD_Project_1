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

                    <h6>Attachment: </h6>
                    <p>{{ $assignment_detailes[0]->attachment }}</p>

                    <p>&nbsp;</p>
                    <p>&nbsp;</p>

                    <h6>Ans: </h6>
                    <p>{{ $assignment_detailes[0]->ans }}</p>
                    <a href="{{ url('/view_ans',$assignment_detailes[0]->id) }}"> View </a>




                </div>
            </div>
        </div>
    </div>
@endsection
