@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 bg-light" style="margin-top: 1em;">

            <div class="row">
                    <div class="col-md-6">

                        <div class="row" style="padding: 1em">
                            <div class="container-fluid" style="padding: 2em;">
                                <h3>
                                    Are you sure you want to delete this?
                                </h3>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center">
                                <a href="{{route('products')}}" class="btn btn-outline-secondary rounded-pill form-control">
                                    Back
                                </a>
                            </div>

                            <div class="col-md-6 d-flex justify-content-center">
                                <a href="{{route('destroy-product',$product->id)}}" class="btn btn-danger rounded-pill form-control">
                                    Yes
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card mb-3 border-0 bg-light" style="max-width: 540px;">
                          <div class="row g-0">
                            <div class="col-md-6 ">
                              <img src="/images/bed.jpeg" width="100%" class="img-fluid rounded-start" alt="...">
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
                        </div>
                    </div>

                </div>

        </div>
    </div>
</div>
@endsection