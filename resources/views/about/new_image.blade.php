@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="row bg-light" style="margin: 1em;">
            <div class="col-md-12" style="padding-top: 1em;">
                <div class="row">
                    <div class="col-md-10">
                        <h4>
                            New Image
                        </h4>
                    </div>  
                </div>  
                
            </div>
            <div class="col-md-12" style="margin-bottom: 1em;">
                <form method="POST" action="{{route('store_about_image')}}" enctype="multipart/form-data">
                  @csrf
                  <label>Add Image</label>
                  <input type="file" name="image" class="form-control">
                  <br>
                  <button class="btn btn-outline-secondary rounded-pill">
                    Save Image
                  </button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection