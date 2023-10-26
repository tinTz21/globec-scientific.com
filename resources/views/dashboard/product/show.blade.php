@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="row bg-light" style="margin-top: 1em;">
            <div class="container-fluid" style="padding: 1em">
                <div class="row">
                    <div class="col-md-9">
                        <h3 style="color: #017C7A;">
                            {{ Illuminate\Support\Str::limit($product->name, 56) }}
                        </h3>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <a href="{{route('add-product')}}" class="btn btn-outline-secondary rounded-pill">
                            Add Category
                        </a>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <a href="{{route('add-product')}}" class="btn btn-outline-secondary rounded-pill">
                            Add New
                        </a>
                    </div>
                    <hr>
                </div>  
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3 border-0 bg-light" >
                      <div class="row g-0">
                        <div class="col-md-6 ">
                          <!-- <img src="/images/bed.jpeg" width="100%" class="img-fluid rounded-start" alt="..."> -->
                          <img src="{{ url(isset($product->image) ? $product->image : 'images/nopic.jpg') }}" alt="image" style="border-radius: 2px;max-width: 50em;height: 13em; min-width: 23em;">
                               
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">   
                            <p class="card-text">
                                {!! $product->description !!}
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row g-0" style="padding: 1em">
                        <div class="col-md-4">
                               <a class="form-control btn btn-outline-secondary rounded-pill" style="padding: 0.5em; border-color: #33BAFA; color: #33BAFA;" href="{{route('products')}}">
                                <i class="bi-arrow-left"></i> Back
                            </a>
                           </div>
                           <div class="col-md-4">
                               <a class="form-control btn btn-outline-secondary rounded-pill" style="padding: 0.5em; border-color: #33BAFA; color: #33BAFA;" href="{{route('edit-product',$product->id)}}">
                                <i class="bi-cart"></i> Edit
                            </a>
                           </div>
                           <div class="col-md-4">
                               <a class="form-control text-danger btn btn-outline-tranparent rounded-pill" style="padding: 0.5em; border-color: red; color: #33BAFA;" href="{{route('delete_product',$product->id)}}">
                                    <i class="bi-trash text-danger"></i> Delete
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