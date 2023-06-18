@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-9 bg-light" style="margin-top: 1em; padding: 1em;">
            <h3>
                Edit Product/Solution
            </h3>
            <br>
            <form method="POST" action="{{route('store_product',$product->id)}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{@$product->id}}">
                <input type="text" class="form-control" name="name" value="{{@$product->name}}" required>
                <br>
                <textarea rows="5" class="form-control" name="description" required>
                    {{@$product->description}}
                </textarea>
                <br>
                <input class="form-control" type="file" name="image">
                <br>
                <a class="btn btn-outline-secondary rounded-pill" href="{{route('products')}}">
                    Back
                </a>
                <button class="btn btn-outline-secondary rounded-pill" type="submit">
                    Save
                </button>
            </form>
        </div>
    </div>
</div>
@endsection