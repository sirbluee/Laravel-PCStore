@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4>Admin List</h4>
              <a href="admin/admin/add" class="btn btn-primary">Add New Admin</a>
            </div>
            @include("admin.layouts._message")
            <table class="table table-bordered border border-1">
              <thead>
                <tr class="bg-dark">
                  <th> Name </th>
                  <th> # </th>
                  <th> Email </th>
                  <th> Status </th>
                  <th> Action </th>
                </tr>
              </thead>
              <tbody>
                @foreach($getRecord as $value)
                <tr>
                  <td> {{$value->id}} </td>
                  <td> {{$value->name}} </td>
                  <td> {{$value->email}} </td>
                  <td> {{($value->status == 0) ? "Active" : "Inactive"}} </td>
                  <td>
                    <a href="{{url('admin/admin/edit/'.$value->id)}}" class="btn btn-success mx-2">Edit</a>
                    <a href="{{url('admin/admin/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>
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
</div>
@endsection