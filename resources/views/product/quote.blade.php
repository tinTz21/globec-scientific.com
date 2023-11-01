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
                        <div class="col-md-12">

                            <img src="{{ url(isset($product->image) ? $product->image : 'images/nopic.jpg') }}" alt="image" style="border-radius: 2px;max-width: 32em; margin-top: 1.3em;"> 
                          <!-- <img src="/images/bed.jpeg" width="100%" class="img-fluid rounded-start" alt="..."> -->
                        </div>
                        <div class="col-md-12">
                          <div class="card-body">
                            <p class="card-text">
                                {!! $product->description !!}
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row g-0" style="padding: 1em">
                           <a href="/" class="form-control btn btn-outline-secondary rounded-pill" style="padding: 0.5em; border-color: #33BAFA; color: #33BAFA;">
                                <i class="bi-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
        </div>

        <div class="col-md-6" style="padding-left: 1em; margin-top: 1em;">
        	<div class="row bg-light" style="padding: 2em">
        		<form action="{{route('query-submit',$product->id)}}" method="POST">
        			@CSRF
        		<h3>
        			Lets talk business!
        		</h3>
        		<div class="form-group">
        			<label>Add Name</label>
        			<input type="text" name="name" class="form-control" required placeholder="e.g. Iren Charles">
        		</div>
        		
        		<div class="row">
        			<div class="form-group col-md-6"><br>
	        			<label>Add Email</label>
	        			<input type="email" name="email" class="form-control" required placeholder="e.g. email@email.mail">
	        		</div>
	        		<div class="form-group col-md-6"><br>
	        			<label>Add Phone</label>
	        			<input type="number" name="phone" class="form-control" required placeholder="e.g. 758 477 593">
	        		</div>
        		</div>

        		<div class="form-group"><br>
        			<label>Add Your Institution</label>
        			<input type="text" name="institution" class="form-control" required placeholder="e.g. Magome Hospital">
        		</div>

        		<div class="form-group"><br>
        			<label>Add Your Position/Role</label>
        			<input type="text" name="position" class="form-control" required placeholder="e.g. Stock Manager">
        		</div>

        		<div class="row">
        			<div class="form-group col-md-6"><br>
	        			<label>Add Country</label>
	        			<input type="text" name="country" class="form-control" required placeholder="e.g. Tanzania">
	        		</div>
	        		<div class="form-group col-md-6"><br>
	        			<label>Add Region</label>
	        			<input type="text" name="region" class="form-control" required placeholder="e.g. Singida">
	        		</div>
        		</div>

        		<div class="form-group"><br>
        			<label>Add Description</label>
        			<textarea class="form-control" name="description" rows="5" placeholder="e.g. Any extra information">
        			</textarea>
        			<br>
        		</div>

        		<div class="col-md-3 d-flex justify-content-center">
        			<button type="submit" class="btn btn-outline-secondary rounded-pill">
	        		     <i class="bi-cart4"></i>	Place Order
	        		</button>
        		</div>
        		</form>
        	</div>
        </div>
    </div>
</div>
@endsection