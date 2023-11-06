<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    @extends('layouts.home')

    @section('content') 

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 bg-light" style="margin-top: 1em;">
                <!-- products -->
                    <div class="container-fluid bg-light" style="padding-left:2em; margin-top: 1em;">
                        <div class="row">
                            <div class="col-md-12" >
                                <h1 style=" color: #017C7A;">
                                    Our Products and Solutions
                                </h1>
                            </div>
                            @if(count($products)>0)
                            @foreach($products as $product)
                                <div class="col-md-6 ">
                                    <div class="card mb-0 border  border-start-0 border-top-0 border-bottom-0 bg-light" style="max-width: 540px;">
                                      <div class="row g-0">
                                        <div class="col-md-12 ">

                                            <img src="{{ url(isset($product->image) ? 'uploads/products/'.$product->image : 'images/nopic.jpg') }}" alt="image" style="border-radius: 2px;max-width: 100%; margin-top: 1.3em;"> 

                                          <!-- <img src="images/bed.jpeg" width="100%" class="img-fluid rounded-start" alt="..."> -->
                                        </div>
                                        <div class="col-md-6">
                                          <div class="card-body">
                                            <h5 class="card-title" style="color: #017C7A;">
                                              
                                                 {{ Illuminate\Support\Str::limit($product->name, 20) }}
                                            </h5>
                                            <p class="card-text">
                                                {!! Illuminate\Support\Str::limit($product->description, 20) !!}
                                            </p>
                                            
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row g-0" style="padding: 1em">
                                           <a href="{{route('product_quote',$product->id)}}" class="form-control btn btn-outline-secondary rounded-pill" style="padding: 0.5em; border-color: #33BAFA; color: #33BAFA;">
                                                <i class="bi-arrow-right"></i> 
                                                Read More...
                                            </a>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            @endforeach

                            <div class="col-md-12">
                                {{ $products->links('pagination::bootstrap-5') }}
                            </div>
                            @elseif(count($products)<1)
                                <div class="col-md-12 d-flex justify-content-center" style="padding-bottom: 2em;">
                                    No Records Found!
                                </div>
                            @endif

                        </div>
                    </div>
                    <!-- End products -->
            </div>
        </div>
    </div>
    @endsection
</div>
