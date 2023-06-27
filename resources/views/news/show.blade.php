@extends('layouts.home')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 bg-light" style="margin-top: 1em;">
            <div class="col-md-12">
                <div class="row" style="margin-top: 1em">
                   <div class="card" style="width: auto;">
                    <h3 class="card-title d-flex justify-content-center" style="padding-top: 1em">{{@$news->name}}</h3>
                      <img src="{{ url(isset($news->image) ? $news->image : 'images/nopic.jpg') }}" alt="image" style="border-radius: 2px;border:1px solid #28a8e4;max-width: 200px;height: 120px;">
                      <div class="card-body">
                        
                        <p class="card-text">
                            {{$news->description}}
                        </p>
                        <a href="{{route('home-news')}}" class="btn btn-outline-secondary rounded-pill" style="border-color: #33BAFA; color: #33BAFA;">Back</a>
                      </div>
                    </div>
               </div>
                </div>
        </div>

        <div class="col-md-4 bg-light" style="padding-left: 1em; margin-top: 1em;">
             <h3 style="bg-light" class="d-flex justify-content-center">Other News</h3>
        	<div class="row bg-light" style="padding-left: 2em">
        		@foreach($blogs as $news)
                    <div class="row" style="margin-top: 1em">

                       <div class="card" style="width: auto;">
                          <div class="card-body">
                            <h5 class="card-title">{{@$news->name}}</h5>
                            <p class="card-text">
                                {{$news->description}}
                            </p>
                            <a href="{{route('home-show-news',$news->id)}}" class="btn btn-outline-secondary rounded-pill" style="border-color: #33BAFA; color: #33BAFA;">Learn More...</a>
                          </div>
                        </div>
                   </div>
                @endforeach
        	</div>
        </div>
    </div>
</div>
@endsection