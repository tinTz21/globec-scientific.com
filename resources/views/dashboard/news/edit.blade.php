@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center bg-light" style="margin-top: 1em; padding: 1em;">

        <div class="col-md-12">
            <h3>
                Edit News
            </h3>
        <form method="POST" action="{{ route('store-news',@$news->id) }}" enctype="multipart/form-data">
            @csrf
            <h3>
                <input type="text" name="name" value="{{@$news->name}}" class="form-control">
            </h3>
            <p>
                <textarea rows="6" name="description" class="form-control" required>
                    {{@$news->description}}
                </textarea>
            </p>
            <input type="file" class="form-control" name="image">
            <br>
            <a href="{{route('more-news',@$news->id)}}" class="btn btn-outline-secondary rounded-pill">
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