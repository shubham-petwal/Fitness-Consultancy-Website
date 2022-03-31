@extends('admin.dashboard')
@section('content')
<div class="right_col" role="main">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Discription</th>
      <th scope="col">Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->pname}}</td>
      <td>{{$item->category}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->disc}}</td>
      <td><img src="{{asset('uploads/product_images/'.$item->image)}}" height="100px" width="100px"></td>
      <td><a href = "update_product/{{$item->id}}" class="btn btn-success">Edit </a></td>
      <td><a href = "deleteimage/{{$item->id}}" class="btn btn-danger">Delete </a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>



@endsection
