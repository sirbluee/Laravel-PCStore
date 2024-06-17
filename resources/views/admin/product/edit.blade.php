@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Product</h4>
          @include("admin.layouts._message")
          <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>
                    Title
                    <span style="color: red;">*</span>
                  </label>
                  <input type="text" class="form-control" required value="{{old('title',$product->title)}}" placeholder="Title" name="title">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>
                    SKU
                    <span style="color: red;">*</span>
                  </label>
                  <input type="text" class="form-control" required value="{{old('sku',$product->sku)}}" placeholder="SKU" name="sku">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>
                    Category
                    <span style="color: red;">*</span>
                  </label>
                  <select class="form-control" required name="category_id" id="ChangeCategory">
                    <option value="">Select</option>
                    @foreach($getCategory as $category)
                    <option {{($product->category_id == $category->id) ? "selected" : ""}} value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>
                    Sub Category
                    <span style="color: red;">*</span>
                  </label>
                  <select class="form-control" required name="sub_category_id" id="getSubCategory">
                    <option value="">Select</option>
                    @foreach($getSubCategory as $subcategory)
                    <option {{($product->sub_category_id == $subcategory->id) ? "selected" : ""}} value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>
                    Brand
                    <span style="color: red;">*</span>
                  </label>
                  <select class="form-control" name="brand_id">
                    <option value="">Select</option>
                    @foreach($getBrand as $brand)
                    <option {{($product->brand_id == $brand->id) ? "selected" : ""}} value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group my-3">
                  <label>
                    Colors
                    <span style="color: red;">*</span>
                  </label>
                  @foreach ($getColor as $color)
                  @php
                  $checked ="";
                  @endphp
                  @foreach($product->getColor as $pcolor)
                  @if($pcolor->color_id == $color->id)
                  @php
                  $checked = 'checked';
                  @endphp
                  @endif
                  @endforeach
                  <label class="btn mx-2
                      @if ($color->name == 'Red')
                          btn-outline-danger
                      @elseif ($color->name == 'Green')
                          btn-outline-success
                      @elseif ($color->name == 'Yellow')
                          btn-outline-warning
                      @elseif ($color->name == 'Black')
                          btn-outline-dark
                      @elseif ($color->name == 'White')
                          btn-outline-light
                      @elseif ($color->name == 'Blue')
                          btn-outline-primary
                      @endif
                      ">
                    <input {{$checked}} type="checkbox" class="btn-check" autocomplete="off" name="color_id[]" value="{{$color->id}}">
                    {{ $color->name }}
                  </label>
                  @endforeach
                </div>
              </div>
            </div>
            <!-- <hr class="border border-info-emphasis border-2 opacity-50"> -->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label>
                    Price ($)
                    <span style="color: red;">*</span>
                  </label>
                  <input type="text" class="form-control" required value="{{!empty($product->price) ? $product->price : ''}}" placeholder="Price" name="price">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>
                    Old Price ($)
                    <span style="color: red;">*</span>
                  </label>
                  <input type="text" class="form-control" required value="{{!empty($product->old_price) ? $product->old_price : ''}}" placeholder="Old Price" name="old_price">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label>
                    Sizes
                    <span style="color: red;">*</span>
                  </label>
                  <table class="table table-bordered" style="border-width: 4px">
                    <thead>
                      <th>Name</th>
                      <th>Price ($)</th>
                      <th>Action</th>
                    </thead>
                    <tbody id="AppendSize">
                      @php
                      $i_s = 1;
                      @endphp
                      @foreach($product->getSize as $size)
                      <tr id="DeleteSize{{$i_s}}">
                        <td>
                          <input type="text" value="{{$size->name}}" name="size[{{$i_s}}][name]" placeholder="Name" class="form-control">
                        </td>
                        <td>
                          <input type="text" value="{{$size->price}}" name="size[{{$i_s}}][price]" placeholder="Price" class="form-control">
                        </td>
                        <td style="width: 110px;">
                          <button type="button" id="{{$i_s}}" class="btn btn-danger DeleteSize">Delete</button>
                        </td>
                      </tr>
                      @php
                      $i_s++;
                      @endphp
                      @endforeach
                      <tr>
                        <td>
                          <input type="text" name="size[100][name]" placeholder="Name" class="form-control">
                        </td>
                        <td>
                          <input type="text" name="size[100][price]" placeholder="Price" class="form-control">
                        </td>
                        <td style="width: 110px;">
                          <button type="button" class="btn btn-primary AddSize">Add</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <hr class="border border-info">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>
                    Image
                  </label>
                  <input type="file" name="image[]" class="form-control" multiple accept="image/*">
                </div>
              </div>
            </div>
            @if(!empty($product->getImage->count()))
            <div class="row" id="sortable">
              @foreach($product->getImage as $image)
              @if(!empty($image->getLogo()))
              <div id="{{$image->id}}" class="sortable_image col-md-1 d-flex flex-column justify-content-center align-items-center mx-1">
                <img src="{{$image->getLogo()}}" alt="" style="width: 100px; height:100px; object-fit:cover; border-radius: 3px;">
                <a onclick="return confirm('Are you sure, you want to delete this image?');" href="{{url('admin/product/image_delete/'.$image->id)}}" class="btn btn-danger btn-sm mt-2">Delete</a>
              </div>
              @endif
              @endforeach
            </div>
            @endif
            <hr class="border border-info mb-4">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>
                    Short Description
                  </label>
                  <textarea name="short_description" class="form-control" placeholder="Short Description" rows="5">{{$product->short_description}}</textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>
                    Description
                  </label>
                  <textarea name="description" class="form-control" placeholder="Description" rows="5">{{$product->description}}</textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>
                    Additional Information
                  </label>
                  <textarea name="additional_information" class="form-control" placeholder="Shipping & Returns" rows="5">{{$product->additional_information}}</textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>
                    Status
                    <span style="color: red;">*</span>
                  </label>
                  <select name="status" class="form-control">
                    <option {{($product->status == 0) ? 'selected' : ''}} value="0">Active</option>
                    <option {{($product->status == 1) ? 'selected' : ''}} value="1">Inactive</option>
                  </select>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

@section('script')
<!-- <script src="{{url('public/sortable/jquery-ui.js')}}"></script> -->
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#sortable").sortable({
      update: function(event, ui) {
        var photo_id = new Array();
        $('.sortable_image').each(function() {
          var id = $(this).attr('id');
          photo_id.push(id);
        })
        $.ajax({
          type: "POST",
          url: "{{ url('admin/product_image_sortable')}}",
          data: {
            'photo_id': photo_id,
            '_token': "{{ csrf_token() }}"
          },
          dataType: "json",
          success: function(data) {},
          error: function(data) {},
        })
      },
    });
  });

  var i = 101;
  $('body').delegate('.AddSize', 'click', function() {
    var html = `
      <tr id="DeleteSize${i}">
        <td>
          <input type="text" name="size[${i}][name]" placeholder="Name" class="form-control">
        </td>
        <td>
          <input type="text" name="size[${i}][price]" placeholder="Price" class="form-control">
        </td>
        <td>
          <button type="button" id="${i}" class="btn btn-danger DeleteSize">Delete</button>
        </td>
      </tr>
    `;
    i++;
    $('#AppendSize').append(html);
  });
  $('body').delegate('.DeleteSize', 'click', function() {
    var id = $(this).attr('id');
    $('#DeleteSize' + id).remove();
  })
  $('body').delegate('#ChangeCategory', 'change', function(e) {
    var id = $(this).val();
    $.ajax({
      type: "POST",
      url: "{{ url('admin/get_sub_category')}}",
      data: {
        'id': id,
        '_token': "{{ csrf_token() }}"
      },
      dataType: "json",
      success: function(data) {
        $('#getSubCategory').html(data.html);
      },
      error: function(data) {

      },
    })

  })
</script>
@endsection