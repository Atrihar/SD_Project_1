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

                    <form method="post" action="{{ url('student/add_members') }}" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <table id="student">
                                <p>Enter your group members ID and Name</p>
                                <tr>
                                    <input type="text" name="name" value="" id="group" placeholder="Name" />
                                    <td id="col0">
                                        <input type="text" name="id[]" value="" placeholder="ID" />
                                    </td>
                                </tr>
                            </table>
                            <input type="button" class="btn btn-default me-2" value="Add Row" onclick="addRows()" />
                            <input type="button" class="btn btn-default me-2" value="Delete Row" onclick="deleteRows()" />
                        </div>

                        <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" required>
                                Are you sure?
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary me-2" onclick="set_groupname();">Submit</button>
                        <button class="btn btn-danger">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        var a = localStorage.getItem("name");
        alert(a);
        document.getElementById("group").value = a;
        // function set_groupname() {
        //     var name = document.getElementByClass("group");
        //     input.setAttribute("value", a);
        // }

        function addRows() {
            var table = document.getElementById('student');
            var rowCount = table.rows.length;
            var cellCount = table.rows[0].cells.length;
            var row = table.insertRow(rowCount);
            for (var i = 0; i <= cellCount; i++) {
                var cell = 'cell' + i;
                cell = row.insertCell(i);
                var copycel = document.getElementById('col' + i).innerHTML;
                cell.innerHTML = copycel;
                // alert(rowCount);
            }
        }

        function deleteRows() {
            var table = document.getElementById('student');
            var rowCount = table.rows.length;
            if (rowCount > '1') {
                var row = table.deleteRow(rowCount - 1);
                rowCount--;
            } else {
                alert('There should be atleast one row');
            }
        }
    </script>
@endsection
