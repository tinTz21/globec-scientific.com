@extends('layouts.home')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6 bg-light" style="margin-top: 1em;">
            <div class="col-md-12">
                    <div class="card mb-3 border-0 bg-light" style="max-width: 540px;">
                      <div class="container-fluid" style="padding-top: 1em;">
                        <h3 class="card-title " style="color: #017C7A;">
                                {{$product->name}}
                        </h3>
                        <div class="col-md-12 ">
                          <img src="/images/bed.jpeg" width="100%" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-12">
                          <div class="card-body">
                            
                            <p class="card-text">
                                {{$product->description}}
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row g-0" style="padding: 1em">
                           <a href="{{route('home-product')}}" class="form-control btn btn-outline-secondary rounded-pill" style="padding: 0.5em; border-color: #33BAFA; color: #33BAFA;">
                                <i class="bi-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
        </div>

        <div class="col-md-6" style="padding-left: 1em; margin-top: 1em;">
        	<div class="row bg-light" style="padding: 2em">
        		<h3>
                    Thank you for submiting your information!      
                </h3>
                <p>We will consult you soon! For quick help please call  +255 653 502 932 or email us via charles@globecscientific.com</p>
                <a class="btn btn-outline-secondary rounded-pill" href="/">
                    Go Home
                </a>
        	</div>
        </div>
    </div>
</div>
@endsection