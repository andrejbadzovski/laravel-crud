@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>
                <div class="card-body">
                    <form action="{{route('products.store')}}" method="POST">
                        <div class="form-group">
                            @csrf   
                            <label for="" class="label">Product SKU</label>
                            <input type="text" name="sku" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="label">Product Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

