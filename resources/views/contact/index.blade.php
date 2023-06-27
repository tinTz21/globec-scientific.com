@extends('layouts.home')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6 bg-light" style="margin-top: 1em;">
            Google Map
        </div>
        <div class="col-md-6 bg-light border" style="margin-top: 1em;">
            <h2 style="padding-top: 1em; padding-left: 1em;">
                {{@$contact->name}}
            </h2>
            <p style="padding-left: 2em; padding-right: 2em; padding-bottom: 2em;">

                {{@$contact->description}}

            </p>
        </div>
    </div>
</div>
@endsection