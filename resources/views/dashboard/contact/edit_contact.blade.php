@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center bg-light" style="margin-top: 1em; padding: 1em;">
        <div class="col-md-6">
            Google Map
        </div>

        <div class="col-md-6">
        <form method="POST" action="{{route('store-contact',@$contact->id)}}" enctype="multipart/form-data">
            @csrf
            <h3>
                <input type="text" name="name" value="{{@$contact->name}}" class="form-control">
            </h3>
            <p>
                <textarea rows="6" name="description" class="form-control" required>
                    {{@$contact->description}}
                </textarea>
            </p>
            <a href="{{route('contact_us')}}" class="btn btn-outline-secondary rounded-pill">
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