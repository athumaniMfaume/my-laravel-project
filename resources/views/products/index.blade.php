@extends('layouts.app')
@section('title','product home')

@section('main')
      <div class="container">
        <div class="text-right">
            <a href="product/create" class="btn btn-primary mt-2">New Product</a>
        </div>


        <h1>Products </h1>

        <table class="table  table-hover mt-2">
            <thead>
                <th>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </th>
            </thead>
            <tbody>

                @foreach ($products as $product)
                   <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td><img src="products/{{$product->image}}" class="rounded-circle" width="50" height="50" alt=""></td>
                    <td>
                        <a href="products/{{$product->id}}/show" class="btn btn-primary">view</a>
                        <a href="products/{{$product->id}}/edit" class="btn btn-warning">Edit</a>
                        <a href="products/{{$product->id}}/delete" class="btn btn-danger">Delete</a>

                    </td>
                   </tr>

                @endforeach

            </tbody>


        </table>

        {{$products->links()}}

    </div>

@endsection
