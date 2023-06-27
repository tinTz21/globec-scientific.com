@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="row bg-light" style="margin-top: 1em;">
            <div class="container-fluid" style="padding: 1em">
                <div class="row">
                    <div class="col-md-10">
                        <h3 style="color: #017C7A;">
                            Our Products and Solutions
                        </h3>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <a href="{{route('add-product')}}" class="btn btn-outline-secondary rounded-pill">
                            Add New
                        </a>
                    </div>
                </div>  
            </div>

            @foreach($products as $product)
                <div class="col-md-6">
                    <div class="card mb-3 border-0 bg-light" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-6 ">
                          <!-- <img src="/images/bed.jpeg" width="100%" class="img-fluid rounded-start" alt="..."> -->
                          <img
                                        src="{{ url(isset($product->image) ? $product->image : 'images/nopic.jpg') }}"
                                        alt="image"
                                        style="border-radius: 2px;border:1px solid #28a8e4;max-width: 200px;height: 120px;">
                               
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">
                            <h5 class="card-title" style="color: #017C7A;">
                                {{$product->name}}
                            </h5>
                            <p class="card-text">
                                {{$product->description}}
                            </p>
                            
                          </div>
                        </div>
                      </div>
                      <div class="row g-0" style="padding: 1em">
                           <div class="col-md-6">
                               <a class="form-control btn btn-outline-secondary rounded-pill" style="padding: 0.5em; border-color: #33BAFA; color: #33BAFA;" href="{{route('edit-product',$product->id)}}">
                                <i class="bi-cart"></i> Edit
                            </a>
                           </div>
                           <div class="col-md-6">
                               <a class="form-control text-danger btn btn-outline-tranparent rounded-pill" style="padding: 0.5em; border-color: red; color: #33BAFA;" href="{{route('delete_product',$product->id)}}">
                                    <i class="bi-trash text-danger"></i> Delete
                                </a>
                           </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection