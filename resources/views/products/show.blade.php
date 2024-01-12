@extends('layout.app')

@section("content")

  
  <div class="container mt-4">
    <h2>Product Details</h2>
    <div class="card" >
      <div class="card-body">
        <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text">{{$product->description}}</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Price: ${{$product->price}}</li>
        <li class="list-group-item">Stock: {{$product->stock}}</li>
        <li class="list-group-item">Created At: {{$product->created_at}}</li>
        <li class="list-group-item">Updated At:  {{$product->updated_at}}</li>
      </ul>
    </div>
  </div>
  
@endsection