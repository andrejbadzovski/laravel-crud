@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center text-success">
                        View product
                    </h3>
                    <br>
                    <table class="table table-border">
                        <thead>
                            <th>Id</th>
                            <th>SKU</th>
                            <th>Name</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->sku}}</td>
                                <td>{{$product->name}}</td>
                                <td>
                                <a href="{{ url('products') }}" class="btn btn-primary">Products Home</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection