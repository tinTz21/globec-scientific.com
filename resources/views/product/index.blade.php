<div class="col-md-12">
    @if(isset($categories_id))
        @livewire('product.index',['category_id'=>$categories_id]);
    @elseif(isset($sub_category_id))
        @livewire('product.index',['sub_category_id'=>$sub_category_id]);
    @endif
    
</div>