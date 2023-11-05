<div class="col-md-12">
    {{-- The Master doesn't talk, he acts. --}}
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-9 bg-light" style="margin-top: 1em; padding: 1em;">
                <h3>
                    Edit Product/Solution
                </h3>
                <br>
                <form wire:submit.prevent="storeProduct({{$this->product_id}})" {{-- method="POST" action="{{route('store_product',$product->id)}}" enctype="multipart/form-data" --}}>
                    {{-- @csrf --}}
                    <input type="text" class="form-control" wire:model="product_name" value="{{@$product->name}}" placeholder="Edit Product/Solution" required>
                    <br>
 
                    <select class="form-control" wire:model="category_id">
                        <option>Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">
                                {{$category->name}}
                            </option>
                        @endforeach
                    </select>
                    <br>

                    @if(isset($this->sub_category_list))
                        <select class="form-control" wire:model="sub_category_id">
                            <option>Select Sub-Category</option>
                            @foreach($this->sub_category_list as $sub_category)
                                <option value="{{$sub_category->id}}">
                                    {{$sub_category->name}}
                                </option>
                            @endforeach
                        </select>
                    @endif
                    <div class="form-group">
                        <label>Edit Content</label>
                        <textarea class="tinymce-editor form-control" wire:model="product_description">
                            {!! @$product->description !!}
                        </textarea>
                    </div>
                    <br>
                    <input class="form-control" type="file" wire:model="image">
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
</div>
