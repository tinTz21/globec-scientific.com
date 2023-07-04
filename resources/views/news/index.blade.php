@extends('layouts.home')

@section('content')
<div class="container-fluid bg-light" style="margin-top: 1em; color: #017C7A;">
    <h3 style=" padding: 10px;">
        News
    </h3>
    <div class="row">
        @foreach($news as $blog)
            <div class="col-md-3">
                <br>
                   <div class="card" style="width: auto;">
                      <img src="{{ url(isset($blog->image) ? $blog->image : 'images/nopic.jpg') }}" alt="image" style="border-radius: 2px;max-width: 30em;height: auto;">
                      <div class="card-body">
                        <h5 class="card-title">
                            {{ Illuminate\Support\Str::limit($blog->name, 30) }}
                        </h5>
                        <p class="card-text">
                            {{ Illuminate\Support\Str::limit($blog->description, 150) }}
                        </p>
                        <a href="{{route('home-show-news',$blog->id)}}" class="btn btn-outline-secondary rounded-pill" style="border-color: #33BAFA; color: #33BAFA;">Learn More...</a>
                      </div>
                    </div>
               
            </div>
        @endforeach
    </div>
</div>
@endsection