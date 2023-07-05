@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center bg-light" style="margin-top: 1em; padding: 1em;">
        <div class="col-md-6">
            Google Map
        </div>

        <div class="col-md-6">
        <form method="POST" action="{{route('store-contact',@$contact->id)}}" enctype="multipart/form-data">
            @csrf
            <h3>
                <input type="text" name="name" value="{{@$contact->name}}" class="form-control">
            </h3>
            <div class="form-group">
                <label>Edit Content</label>
                <textarea class="tinymce-editor form-control" name="description">
                    {!! @$contact->description !!}
                </textarea>
            </div>
            <br>
            
            <a href="{{route('contact_us')}}" class="btn btn-outline-secondary rounded-pill">
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