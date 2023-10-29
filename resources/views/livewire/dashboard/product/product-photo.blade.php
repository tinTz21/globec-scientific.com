<div>
    {{-- Success is as dangerous as failure. --}}
    <form method="POST" action="{{route('store_product')}}"  enctype="multipart/form-data" >
            @csrf 
            <div class="col-md-12">
                <label>
                    Add Product Photo
                </label>
                <input class="form-control" type="file" name="image"> 
                <button class="btn btn-outline-secondary rounded-pill" type="submit">
                    Save
                </button>
            </div>
        </form>
</div>
