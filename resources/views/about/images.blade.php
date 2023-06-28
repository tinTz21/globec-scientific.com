@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="row bg-light" style="margin: 1em;">
            <div class="col-md-12" style="padding-top: 1em;">
                <div class="row">
                    <div class="col-md-9">
                        <h4>
                            Sliding Images (For better perfomance add max of 4 images)
                        </h4>
                    </div>
                    <div class="col-md-3">
                        <h4>
                            <a class="btn btn-outline-secondary rounded-pill" href="{{route('about')}}">
                                <i class="bi-arrow-left"></i> Back
                            </a>
                            <a class="btn btn-outline-secondary rounded-pill" href="{{route('add_about_image')}}">
                                <i class="bi-plus-circle"></i> Add New
                            </a>
                        </h4>
                    </div>   
                </div>  
            </div>
            <div class="col-md-12">
                <div class="row" style="padding: 2em">
                    {{-- $about_images --}}
                    @foreach($about_images as $image)
                        <div class="col-md-4">
                            <img src="{{ url(isset($image->name) ? $image->name : 'images/nopic.jpg') }}" alt="image" style="border-radius: 2px;max-width: 19em; max-height: 10.5em; margin-top: 1.3em;"> 

                            <a href="{{route('delete-about-image',$image->id)}}" class="btn btn-outline-secondary rounded-pill">
                                <i class="bi-trash text-danger"></i> Delete
                            </a>
                        </div>
                     @endforeach
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection