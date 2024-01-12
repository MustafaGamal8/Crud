@extends('layout.app')

@section('content')
    <h1 class="text-center my-5">Products</h1>

    <div class="mx-auto w-50 my-5"><a class="btn btn-primary w-100" href="{{route('products.create')}}">Add Product</a></div>
    <section class="container">

        <table class="table">
            <thead class="thead-dark bg-dark text-white">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">stock</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th scope="col">show</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key => $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->stock}}</td>
                        <td><a class="btn btn-primary " href="{{route('products.edit', $product->id)}}">Edit</td>
                        <td><a class="btn btn-danger " href="{{route('products.destroy', $product->id)}}">Delete</td>
                        <td><a class="btn btn-primary " href="{{route('products.show', $product->id)}}">show</td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </section>
@endsection
