@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="row bg-light" style="margin: 1em;">
            <div class="col-md-12" style="padding-top: 1em;">
                <h4>
                    <i class="bi-cart"></i> Customer Order
                </h4>    
            </div>
            <hr>
            <div class="row">


                <div class="col-md-6">
                    <div class="card mb-3 border-0 bg-light" style="max-width: 540px;">
                      <div class="container-fluid" style="padding-top: 2em;">
                        <h3 class="card-title d-flex justify-content-center" style="color: {{isset($customer->product->name) ? '#017C7A' : 'red'}} ;">
                                {{isset($customer->product->name) ? $customer->product->name : 'Product Deleted!'}}
                            </h3>
                        <div class="col-md-12 d-flex justify-content-center">
                          <img src="/images/bed.jpeg" width="100%" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-12">
                          <div class="card-body">
                            <p class="card-text" style="color: {{isset($customer->product->description) ? '' : 'red'}};">
                                {{isset($customer->product->description) ? $customer->product->description : 'Product Deleted!'}}
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row g-0" style="padding: 1em">
                           <a href="{{route('customers')}}" class="form-control btn btn-outline-secondary rounded-pill" style="padding: 0.5em; border-color: #33BAFA; color: #33BAFA;">
                                <i class="bi-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 border" style="padding: 1em;  margin-bottom: 1em;">
                    <h5>
                    <i class="bi-person"></i> {{$customer->name}}
                </h5>
                <p>
                    <i class="bi-envelope-at"></i> {{$customer->email}} &nbsp; &nbsp; &nbsp; &nbsp;  <i class="bi-phone-fill"></i> {{$customer->phone}}
                </p>
                <h5>
                  <i class="bi-person-workspace"></i> Customer Institution
                </h5>
                <hr>

                <h5>
                      Institution:  {{$customer->institution}}
                </h5>
                <p>
                    - {{$customer->position}}
                </p>

                <p>
                     <i class="bi-pin" style="font-size: 1em"></i> {{$customer->country}} &nbsp; &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; {{$customer->region}} 
                </p>
                
                <p>
                    {{$customer->description}}
                </p>
                <p>
                     <i class="bi-calendar2-range"></i> Order placed at: {{$customer->created_at->format('d M Y')}}
                </p>
                <h5>
                   Customer Order
                </h5>
                <hr>
                <h6>
                    Product Name: <product style="color: {{isset($customer->product->name) ? '' : 'red'}};">{{isset($customer->product->name) ? $customer->product->name : 'Product Deleted!'}}</product>
                </h6> 
                <h6>
                    Product Created At: <product style="color: {{isset($customer->product->created_at) ? $customer->product->created_at->format('d m Y') : 'red'}};">{{isset($customer->product->created_at) ? $customer->product->created_at->format('d M Y') : 'Product Deleted!'}}</product>
                </h6>
                <hr>
                <div style="color: {{isset($customer->status) ? 'green' : ''}}; font-size: 17px;">
                    This customer is {{isset($customer->status) ? 'now sorted' : 'not-sorted when negotiation is done'}} 
                    @if(!isset($customer->status))
                    <a href="{{route('customer-sorted',$customer->id)}}" class="btn btn-outline-secondary rounded-pill">
                        click here
                    </a>
                </div>
                @endif
                </div>
            </div>
            


        </div>
        </div>
    </div>
</div>
@endsection