@extends('admin.layouts.defult')

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">All Users</h4>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>Role</th>
                    <th>Status</th>
                  </tr>
                </thead>

                <tbody>
                    @foreach($users as $u)
                    <tr>
                      <td>{{ $u->name }}</td>
                      <td>{{ $u->email }}</td>
                      <td>{{ $u->contact_no }}</td>
                      <td>{{ $u->role }}</td>
                      <td>
                        @if($u->is_approved == 0)
                         <a href="{{ url('admin/approve/'.$u->id) }}">Approve</a>
                        @else
                        <label class="badge badge-success">Approved</label>
                        @endif

                       </td>
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
