@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center bg-light" style="margin-top: 1em; padding: 1em;">
        <div class="col-md-6">
            Google Map
        </div>

        <div class="col-md-6">
            <h3>
                {{$contact->name}}
            </h3>
            <p>
                {{$contact->description}}
            </p>
            <a href="{{route('edit-contact',$contact->id)}}" class="btn btn-outline-secondary">
                Edit
            </a>
        </div>
    </div>
</div>
@endsection