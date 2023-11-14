<div class="container-fluid">
        <div class="row justify-content-center">
            
                @if($this->next == '0')
                <div class="col-md-9 bg-light" style="margin-top: 1em; padding: 1em;">
                <h3>
                    Add Product/Solution
                </h3>
                <br>
                <form wire:submit.prevent="storeProduct"  {{--  method="POST" action="{{route('store_product')}}"  enctype="multipart/form-data" --}}>
                    {{-- @csrf --}}
                    <input type="text" class="form-control" wire:model="product_name" placeholder="Add Product/Solution" required>
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
                        <label>Add Content</label>
                        <textarea class="tinymce-editor form-control" wire:model="description"></textarea>
                    </div>
                    <br>
                    {{-- @if ($image)
                        Photo Preview:
                        <img src="{{ $image->temporaryUrl() }}" width="50%">
                    @endif --}}
                    {{-- <input class="form-control" type="file" wire:model="image">
                    @error('image') 
                        <span class="text-danger">{{ $message }}</span>
                    @enderror 
 
                    <div wire:loading wire:target="image">Uploading...</div>
                    <br> --}}
                    <a class="btn btn-outline-secondary rounded-pill" href="{{route('products')}}">
                        Back
                    </a>
                    <button class="btn btn-outline-secondary rounded-pill" type="submit">
                        Next
                    </button>
                </form>
                @else($this->next == '1')
                     
                    <form method="POST" action="{{route('store_product',$this->p_id)}}"  enctype="multipart/form-data" >
                        @csrf 
                        <div class="col-md-12 bg-light" style="margin-top: 1em; padding: 1em;">
                            <label>
                                 {{"Add ". $this->product_name." Photo"}} 
                            </label>
                            <input class="form-control" type="file" name="image"> 
                            <button class="btn btn-outline-secondary rounded-pill" type="submit">
                                Save
                            </button>
                        </div>
                    </form>
                @endif
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