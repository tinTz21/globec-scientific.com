@extends('layouts.app')

@section('content')
<div class="row">
    <div class="row justify-content-center">
        <div class="col-md-12 bg-light" style="margin-top: 1em; padding: 2em;">
            <div class="row">
                <div class="col-md-8 border" style="padding: 1em;">
                    <form method="POST" action="{{route('store-about',@$about->id)}}" enctype="multipart/form-data">
                        @csrf
                        <h1>
                        <input type="text" name="name" value="{{@$about->name}}" class="form-control">
                        </h1>
                        <div class="form-group">
                            <label>Edit Content</label>
                            <textarea class="tinymce-editor form-control" name="description">
                                {!! @$about->description !!}
                            </textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-outline-secondary">
                            Save
                        </button>
                    </form>
                </div>
                <div class="col-md-4">

                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner ">
                            @foreach($about_images as $image)
                                <div class="carousel-item @if($loop->first) active @endif">
                                    <div class="slider-image text-center">
                                        <img src="{{ url(isset($image->name) ? $image->name : 'images/nopic.jpg') }}" class="d-block w-100" alt="Globec Scientific Ltd">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <br>
                    <a href="" class="btn btn-outline-secondary">
                        Edit
                    </a>

                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  
    <script type="text/javascript">
            tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount', 'image'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
</div>
@endsection
