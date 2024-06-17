@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-5">Edit Admin</h4>
          <form class="forms-sample" action="" method="post">
            {{csrf_field()}}
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" value="{{old('name', $getRecord->name)}}" required placeholder="Name" name="name">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" value="{{old('email', $getRecord->email)}}" required placeholder="Email" name="email">
              <div style="color: red;">{{$errors->first('email')}}</div>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="text" class="form-control" placeholder="Password" name="password">
              <p>Do you want to change to new password? (Optional)</p>
            </div>
            <div class="form-group">
              <label>Status</label>
              <select name="status" class="form-control" required>
                <option {{($getRecord->status == 0) ? "selected" : ""}} value="0">Active</option>
                <option {{($getRecord->status == 1) ? "selected" : ""}} value="1">Inactive</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection