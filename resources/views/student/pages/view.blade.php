@extends('student.pages.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Assignment Name </h4>


                    <h5>Due: 30 - 04 - 2023</h5>

                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus magni harum similique? Perspiciatis
                        dolorem omnis blanditiis ab adipisci et quod assumenda totam doloribus. Hic magnam quia perspiciatis
                        beatae ex aperiam doloremque odio repellendus blanditiis vel, porro sed quod, tenetur placeat ad
                        sint commodi. Quos.
                    </p>

                    <p>file link</p>

                    <p>&nbsp;</p>
                    <p>&nbsp;</p>

                    <h4>Submit here</h4>
                    <form action="#" method="post">
                        <div>
                            <input class="form-control" type="file" name="" id="">
                        </div>
                        <div>
                            <p>&nbsp;</p>
                            <h6>Or Insert your work link </h6>
                            <input class="form-control" type="url" name="" id=""
                                placeholder="https://github.com/atrihar/SdProject">
                        </div>
                        <p>&nbsp;</p>
                        <button type="submit" class="btn btn-primary">Submit</button>


                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
