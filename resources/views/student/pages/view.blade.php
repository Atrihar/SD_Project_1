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

                    <h6>Attachment: </h6>
                    <p>{{ $assignment_detailes[0]->attachment }}</p>

                    <p>&nbsp;</p>
                    <p>&nbsp;</p>

                    <h4>Submit here</h4>
                    <form action="{{ url('submit_assignment/' . $assignment_detailes[0]->id) }}" method="post">
                        <div>
                            <input class="form-control" value="{{ $assignment_detailes[0]->ans }}" type="file" name="ans" id="ans" placeholder="Attach your file here" required>
                        </div>
                        {{-- <div>
                            <p>&nbsp;</p>
                            <h6>Or Insert your work link </h6>
                            <input class="form-control" type="url" name="" id=""
                                placeholder="https://github.com/atrihar/SdProject">
                        </div> --}}
                        <p>&nbsp;</p>
                        <button type="submit" class="btn btn-primary">Submit</button>


                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
