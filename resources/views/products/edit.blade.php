@extends('layout.app')

@section("content")

<div class="container mt-4">
  <h2>Edit Product</h2>
  <form method="POST" action="{{route('products.update', $product->id)}}">
    @csrf
    <div class="form-group">
      <label for="name">Product Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name" value="{{$product->name}}">
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" value="{{$product->price}}"> 
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class="form-control" id="description" rows="3" name="description" placeholder="Enter product description"  >{{$product->description}}</textarea>
    </div>
    <div class="form-group">
      <label for="stock">Stock:</label>
      <input type="number" class="form-control" id="stock" name="stock" placeholder="Enter available stock" value="{{$product->stock}}">
    </div>
    <button type="submit" class="btn btn-primary my-5">Submit</button>
  </form>
</div>
  
@endsection