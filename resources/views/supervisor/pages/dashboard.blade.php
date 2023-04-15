@extends('supervisor.layouts.defult')

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Project Groups</h4>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Group Name</th>
                    <th>Project</th>
                    <th>Last Assesment</th>
                    <th>Grade</th>
                    {{-- <th></th>
                    <th></th> --}}
                  </tr>
                </thead>
                <tbody>
                    @foreach($a as $u)
                    <tr>
                      <td>{{ $u->name }}</td>
                      <td>{{ $u->project_name }}</td>
                      <td>{{ $u->updated_at }}</td>
                      <td>{{ $u->grade }}</td>
                      {{-- <td>
                        @if($u->is_approved == 0)
                         <a href="{{ url('admin/approve/'.$u->id) }}">Approve</a>
                        @else
                        <label class="badge badge-success">Approved</label>
                        @endif

                       </td> --}}
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>


@endsection
