@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add New Color</h4>
          <form class="forms-sample" action="" method="post">
            {{csrf_field()}}
            <div class="form-group">
              <label>
                Color Name
                <span style="color: red;">*</span>
              </label>
              <input type="text" class="form-control" required value="{{old('name')}}" placeholder="Color Name" name="name">
            </div>
            <div class="form-group">
              <label>
                Color Code
                <span style="color: red;">*</span>
              </label>
              <input type="color" class="form-control" required value="{{old('code')}}" placeholder="Color Code" name="code">
            </div>
            <div class="form-group">
              <label>
                Status
                <span style="color: red;">*</span>
              </label>
              <select name="status" class="form-control">
                <option {{(old('status') == 0) ? 'selected' : ''}} value="0">Active</option>
                <option {{(old('status') == 1) ? 'selected' : ''}} value="1">Inactive</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection