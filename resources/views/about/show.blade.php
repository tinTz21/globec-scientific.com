@extends('layouts.home')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 bg-light" style="margin-top: 1em;">
            <h2 style="padding-top: 1em; padding-left: 1em;">
                {{$about->name}}
            </h2>
            <div class="col-md-12" style="padding: 1em">

                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner ">
                            @foreach($about_images as $image)
                                <div class="carousel-item @if($loop->first) active @endif">
                                    <div class="slider-image text-center">
                                        <img src="{{ url(isset($image->name) ? $image->name : 'images/nopic.jpg') }}" class="d-block w-100" alt="Globec Scientific Ltd">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                
            </div>
            <p style="padding-left: 2em; padding-right: 2em; padding-bottom: 2em;">

                {!! $about->description !!}
            </p>

        </div>
    </div>
</div>
@endsection