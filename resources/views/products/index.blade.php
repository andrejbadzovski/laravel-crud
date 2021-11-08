@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Manage Products</h1>
            <a href="{{route('products.create')}}" class="btn btn-success">Create product</a>

            <table class="table table-border">
                <thead>
                    <th>Id</th>
                    <th>SKU</th>
                    <th>Name</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->sku}}</td>
                        <td>{{$product->name}}</td>
                        <td>
                            <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning">Edit post</a>
                            <a href="{{route('products.show', $product->id)}}" class="btn btn-primary">View post</a>
                            <form action="{{route('products.destroy', $product->id)}}" method="POST" style= "display:inline-block">
                                @csrf 
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @if($products->count() > 0)
                        <select name='selectOption'>
                            <option value="Product list">Product list</option>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                        </select>
                    @else
                        <td>No Record Found</td>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection