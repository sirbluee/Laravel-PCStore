@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4>Category List</h4>
              <a href="/admin/category/add" class="btn btn-primary">Add New Category</a>
            </div>
            @include("admin.layouts._message")
            <table class="table table-bordered border border-1">
              <thead>
                <tr class="bg-dark">
                  <th> # </th>
                  <th> Name </th>
                  <th> Slug </th>
                  <th> Meta Title </th>
                  <th> Meta Description </th>
                  <th> Meta Keywords </th>
                  <th> Created By </th>
                  <th> Status </th>
                  <th> Created Date </th>
                  <th> Action </th>
                </tr>
              </thead>
              <tbody>
                @foreach($getRecord as $value)
                <tr>
                  <td> {{$value->id}} </td>
                  <td> {{$value->name}} </td>
                  <td> {{$value->slug}} </td>
                  <td> {{$value->meta_title}} </td>
                  <td> {{$value->meta_description}} </td>
                  <td> {{$value->meta_keywords}} </td>
                  <td> {{$value->created_by_name}} </td>
                  <td> {{($value->status == 0) ? "Active" : "Inactive"}} </td>
                  <td> {{ date('d-m-Y', strtotime($value->created_at)) }} </td>
                  <td>
                    <a href="{{url('admin/category/edit/'.$value->id)}}" class="btn btn-success mx-2">Edit</a>
                    <a href="{{url('admin/category/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>
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