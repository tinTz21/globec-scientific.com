@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-9 bg-light" style="margin-top: 1em; padding: 1em;">
            <h3>
                Add Product/Solution
            </h3>
            <br>
            <form method="POST" action="{{route('store_product')}}" enctype="multipart/form-data">
                @csrf
                <input type="text" class="form-control" name="name" placeholder="Add Product/Solution">
                <br>
                <textarea rows="5" class="form-control" name="description">
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