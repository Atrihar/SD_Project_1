@extends('student.layouts.defult')
@section('content')
    <div class="row">
        <div class="col-md-9 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Project Group</h4>
                    <p class="card-description">
                        Create a new group for project
                    </p>
                    <form method="post" action="{{ url('student/newGroup') }}" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Group Name" required>
                        </div>

                        <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" required>
                                Are you sure?
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary me-2" onclick="getname()">Next</button>
                        <button class="btn btn-danger">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function getname(){
            var name = document.getElementById("name").value;
            alert(name);
            localStorage.setItem("name",name);
            window.location.href = "{ url('student/addMember') }";
        }
    </script>

@endsection
