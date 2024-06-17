@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add New Sub Category</h4>
          <form class="forms-sample" action="" method="post">
            {{csrf_field()}}
            <div class="form-group">
              <label>
                Category Name
                <span style="color: red;">*</span>
              </label>
              <select name="category_id" class="form-control">
                <option value="">Select Category</option>
                @foreach($getCategory as $value)
                <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>
                Sub Category Name
                <span style="color: red;">*</span>
              </label>
              <input type="text" class="form-control" required value="{{old('name')}}" placeholder="Sub_Category Name" name="name">
            </div>
            <div class="form-group">
              <label>
                Slug
                <span style="color: red;">*</span>
              </label>
              <input type="text" class="form-control" required value="{{old('slug')}}" placeholder="Slug Ex. URL" name="slug">
              <div style="color: red;">{{$errors->first('slug')}}</div>
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
            <div class="form-group">
              <label>
                Meta Title
                <span style="color: red;">*</span>
              </label>
              <input type="text" class="form-control" required value="{{old('meta_title')}}" placeholder="Meta Title" name="meta_title">
            </div>
            <div class="form-group">
              <label>Meta Description</label>
              <textarea class="form-control" name="meta_description" placeholder="Meta description">{{old('meta_description')}}</textarea>
            </div>
            <div class="form-group">
              <label>Meta Keywords</label>
              <input type="text" class="form-control" value="{{old('meta_keywords')}}" placeholder="Meta Keywords" name="meta_keywords">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection