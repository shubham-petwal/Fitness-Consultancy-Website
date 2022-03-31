@extends('admin.dashboard')
@section('content')
<div class="right_col" role="main">
    <h2 style="margin-top:20px" align="center">Update Product</h2><hr>

<div class="container-fluid" style="width:90%;margin-top:10%">
<form method="POST" action="{{url('/admin/updateimage/'.$products->id)}}" enctype="multipart/form-data">
{{ csrf_field() }}

    <div class="form-row">
    <div class="form-group col-md-6">
      <label >Product Name</label>
      <input type="text" class="form-control" value = "{{$products->pname}}" placeholder="Enter Product Name" name="pname">
    </div>
    <div class="form-group col-md-6">
    <label >Product Image</label>
    <input type="file" class="form-control" value = "{{$products->image}}" id="exampleInputPassword1" name="image">
</div></div>
<div class="form-row">
        <div class="form-group col-md-6">
      <label for="inputState">Category</label>
      <select id="inputState" class="form-control" value="{{$products->category}}" name="category">
        <option>Select Category</option>
        <option value="Equipments">Equipments</option>
        <option value="Eatables">Eatables</option>
      </select>
    </div>

<!--  -->
    <div class="form-group col-md-6">
      <label>Product Price</label>
      <input type="number" class="form-control" value = "{{$products->price}}" name="price" placeholder="Enter Price">
    </div></div>
    <div class="form-group">
    <label >Description</label>
    <input type="text" class="form-control" value = "{{$products->disc}}" placeholder="Description About Product" name="disc"  style="height:120px;">
  </div>
  <button type="submit" class="btn btn-primary">Submit1</button>
</form>
</div>
</div>
</div>
@endsection
