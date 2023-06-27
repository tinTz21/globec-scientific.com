@extends('layouts.home')

@section('content') 
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 bg-light" style="margin-top: 1em;">
            <h2 style="padding-top: 1em; padding-left: 1em;">
                Products
            </h2>
            <!-- products -->
                <div class="container-fluid bg-light" style="padding:2em; margin-top: 1em;">
                    <div class="row">
                        <div class="col-md-12" >
                            <h1 style="padding-left: 1em; color: #017C7A;">
                                Our Products and Solutions
                            </h1>
                            &nbsp;
                        </div>

                        @foreach($products as $product)
                            <div class="col-md-6">
                                <div class="card mb-3 border-0 bg-light" style="max-width: 540px;">
                                  <div class="row g-0">
                                    <div class="col-md-6 ">
                                      <img src="images/bed.jpeg" width="100%" class="img-fluid rounded-start" alt="...">
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
                                       <a href="{{route('product_quote',$product->id)}}" class="form-control btn btn-outline-secondary rounded-pill" style="padding: 0.5em; border-color: #33BAFA; color: #33BAFA;">
                                            <i class="bi-cart"></i> Place Order
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-md-12">
                            {{-- @$product->links() --}}
                        </div>

                    </div>
                </div>
                <!-- End products -->

        </div>
    </div>
</div>
@endsection