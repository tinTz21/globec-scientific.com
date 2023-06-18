@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="container-fluid bg-light" style="padding: 2em; margin-top: 1em;">
            <div class="container-fluid">
                <h3 style="color: #017C7A;">
                    News
                </h3>
            </div>
            
            <div class="row d-flex justify-content-center" style="padding-top: 1em;">
             
               <div class="col-md-12" style="margin-top: 1em">
                   <div class="card" style="width: auto;">
                      <img src="/images/cancer.jpg    " class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">
                            {{$news->name}}
                        </h5>
                        <p class="card-text">
                            {{$news->description}} 
                        </p>

                        <a href="{{route('edit-news',$news->id)}}" class="btn btn-outline-secondary rounded-pill" style="border-color: #33BAFA; color: #33BAFA;">Edit</a>
                        <a href="{{route('delete-news',@$news->id)}}" class="btn btn-outline-secondary text-danger rounded-pill" style="border-color: red; color: red;">
                            <i class="bi-trash"></i> Delete
                        </a>
                        <a href="{{route('more-news',@$news->id)}}" class="btn btn-outline-secondary rounded-pill" style="border-color: #33BAFA; color: #33BAFA;">
                            Learn More
                        </a>
                      </div>
                    </div>
               </div>
               
            </div>
        </div>

        </div>
    </div>
</div>
@endsection