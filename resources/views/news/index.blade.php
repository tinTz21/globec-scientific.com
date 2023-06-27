@extends('layouts.home')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        @foreach($news as $blog)
            <div class="col-md-3">
                <br>
                   <div class="card" style="width: auto;">
                      <img src="{{ url(isset($blog->image) ? $blog->image : 'images/nopic.jpg') }}" alt="image" style="border-radius: 2px;border:1px solid #28a8e4;max-width: 200px;height: 120px;">
                      <div class="card-body">
                        <h5 class="card-title">{{@$blog->name}}</h5>
                        <p class="card-text">
                            {{$blog->description}}
                        </p>
                        <a href="{{route('home-show-news',$blog->id)}}" class="btn btn-outline-secondary rounded-pill" style="border-color: #33BAFA; color: #33BAFA;">Learn More...</a>
                      </div>
                    </div>
               
            </div>
        @endforeach
    </div>
</div>
@endsection