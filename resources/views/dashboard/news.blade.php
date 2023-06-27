@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="container-fluid bg-light" style="padding: 2em; margin-top: 1em;">
            <div class="row">
                <div class="col-md-9">
                    <h3 style="color: #017C7A;">
                        News
                    </h3>
                </div>
                <div class="col-md-3">
                    
                    <a href="{{route('add-news')}}" class="btn btn-outline-secondary rounded-pill">
                       <i class="bi-plus-circle"></i> Add New
                    </a>
                </div>
            </div>
            
            <div class="row d-flex justify-content-center" style="padding-top: 1em;">
               @foreach($news as $blog)
               <div class="col-md-4" style="margin-top: 1em">
                   <div class="card" style="width: auto;">
                      <img src="{{ url(isset($blog->image) ? $blog->image : 'images/nopic.jpg') }}" alt="image" style="border-radius: 2px;border:1px solid #28a8e4;max-width: 300px;">
                      <div class="card-body">
                        <h5 class="card-title">
                            {{$blog->name}}
                        </h5>
                        <p class="card-text">
                            {{$blog->description}} 
                        </p>

                        <a href="{{route('edit-news',$blog->id)}}" class="btn btn-outline-secondary rounded-pill" style="border-color: #33BAFA; color: #33BAFA;">Edit</a>
                        <a href="{{route('delete-news',@$blog->id)}}" class="btn btn-outline-secondary text-danger rounded-pill" style="border-color: red; color: red;">
                            <i class="bi-trash"></i> Delete
                        </a>
                        <a href="{{route('more-news',@$blog->id)}}" class="btn btn-outline-secondary rounded-pill" style="border-color: #33BAFA; color: #33BAFA;">
                            Learn More
                        </a>
                      </div>
                    </div>
               </div>
               @endforeach
            </div>
        </div>

        </div>
    </div>
</div>
@endsection