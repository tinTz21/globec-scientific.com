@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="container-fluid bg-light" style="padding: 2em; margin-top: 1em;">
            
            <div class="row d-flex justify-content-center" style="padding-top: 1em;">

               <div class="col-md-6">
                   <h3 class="d-flex justify-content-center">
                       Are you sure you want to delete this image?
                   </h3>
                   <div class="row" style="padding: 2em">
                       <div class="col-md-6">
                           <a href="{{route('about-images')}}" class="form-control btn btn-outline-secondary rounded-pill" style="border-color: #33BAFA; color: #33BAFA;">
                               Back
                           </a>
                       </div>
                       <div class="col-md-6">
                        <form method="POST" action="{{route('destroy-about-image', @$image->id)}}">
                            @csrf
                            <button type="submit"  class="form-control btn btn-outline-secondary text-danger rounded-pill" style="border-color: red; color: red;">
                            <i class="bi-trash"></i> 
                                Delete
                            </button>
                        </form>
                       </div>
                   </div>
               </div>

               <div class="col-md-6" style="margin-top: 1em">
                   <div class="card" style="width: auto;">
                      <img src="{{ url(isset($image->name) ? $image->name : 'images/nopic.jpg') }}" alt="image" style="border-radius: 2px;max-width: 50em; max-height: auto; margin-top: 1.3em;"> 
                      <div class="card-body">
                        <h5 class="card-title">
                            Sliding image
                        </h5>   
                      </div>
                    </div>
               </div>
             
            </div>
        </div>

        </div>
    </div>
</div>
@endsection