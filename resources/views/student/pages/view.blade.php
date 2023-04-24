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
                        {{-- {{ $assignment_detailes[0]->attachment }} --}}
                    </p>
                    {{-- {{ url('publc/asset/'.$assignment_detailes[0]->attachment ) }} --}}

                    <h6>Attachment:
                    <p><a target="_blank" href="{{ asset('asset/'.$assignment_detailes[0]->attachment) }}">File</a></p>

                    <p>&nbsp;</p>
                    <p>&nbsp;</p>

                    <h4>Submit here</h4>
                    <form action="{{ url('submit_assignment/' . $assignment_detailes[0]->id) }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="ans" >Attach your file here</label>
                            <input class="form-control"  type="file" name="ans" id="ans" required>
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
