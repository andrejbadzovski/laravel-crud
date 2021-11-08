@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Post</div>
                <div class="card-body">
                    <form action="{{route('products.update', $product->id)}}" method="POST">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <div class="form-group">
                            @csrf   
                            @method('PUT')
                            <label for="" class="label">Product SKU</label>
                            <input type="text" name="sku" class="form-control" value="{{$product->sku}}" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="label">Product Name</label>
                            <input type="text" name="name" class="form-control" value="{{$product->name}}" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Edit</button>                         
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection