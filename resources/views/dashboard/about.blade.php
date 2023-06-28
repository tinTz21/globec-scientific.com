@extends('layouts.app')

@section('content')
<div class="row">
    <div class="row justify-content-center">
        <div class="col-md-12 bg-light" style="margin-top: 1em; padding: 2em;">
            <div class="row">
                <div class="col-md-8">
                    <h1>
                        {{$about->name}}
                    </h1>
                    <p>
                        {{$about->description}}
                    </p>
                    <a href="{{route('edit-about',$about->id)}}" class="btn btn-outline-secondary">
                        Edit
                    </a>
                </div>
                <div class="col-md-4">

                    <div id="carouselExampleCaptions" class="carousel slide">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                      @foreach($about_images as $image)
                        <div class="carousel-item active">
                          <img src="{{ url(isset($image->name) ? $image->name : 'images/nopic.jpg') }}" alt="image" style="border-radius: 2px;max-width: 19em; max-height: 10.5em; margin-top: 1.3em;"> 
                          <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-dark">Globec Scientific ltd</h5>
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

                    <br>
                    <a href="{{route('about-images')}}" class="btn btn-outline-secondary">
                        Edit
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
