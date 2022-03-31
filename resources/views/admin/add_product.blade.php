@extends('admin.dashboard')
@section('content')
<div class="right_col" role="main">
    <h2 style="margin-top:20px" align="center">Add Product</h2><hr>

<div class="container-fluid" style="width:90%;margin-top:10%">
<form method="post" action="{{route('admin.add_product')}}" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="form-row">
    <div class="form-group col-md-6">
      <label >Product Name</label>
      <input type="text" class="form-control" placeholder="Enter Product Name" name="pname">
    </div>
    <div class="form-group col-md-6">
    <label >Product Image</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="image" >
</div></div>
<div class="form-row">
        <div class="form-group col-md-6">
      <label for="inputState">Category</label>
      <select id="inputState" class="form-control" name="category">
        <option>Select Category</option>
        <option value="Equipments">Equipments</option>
        <option value="Eatables">Eatables</option>
      </select>
    </div>
<!--  -->
    <div class="form-group col-md-6">
      <label>Product Price</label>
      <input type="number" class="form-control" name="price" placeholder="Enter Price" id="inputEmail4">
    </div></div>
    <div class="form-group">
    <label >Description</label>
    <input type="text" class="form-control" placeholder="Description About Product" name="disc"  style="height:120px;">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
</form>
</div>
</div>
@error('submit')
<script>
    alert('1 Product Added Successfully');
</script>
@endif
</div>
@endsection
