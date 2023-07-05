@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-9 bg-light" style="margin-top: 1em; padding: 1em;">
            <h3>
                Edit Product/Solution
            </h3>
            <br>
            <form method="POST" action="{{route('store_product',$product->id)}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{@$product->id}}">
                <input type="text" class="form-control" name="name" value="{{@$product->name}}" required>
                <br>
                <div class="form-group">
                    <label>Edit Content</label>
                    <textarea class="tinymce-editor form-control" name="description">
                        {!! @$product->description !!}
                    </textarea>
                </div>
                <br>
                <input class="form-control" type="file" name="image">
                <br>
                <a class="btn btn-outline-secondary rounded-pill" href="{{route('products')}}">
                    Back
                </a>
                <button class="btn btn-outline-secondary rounded-pill" type="submit">
                    Save
                </button>
            </form>
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