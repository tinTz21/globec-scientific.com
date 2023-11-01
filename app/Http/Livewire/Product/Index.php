<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $sub_category_id, $category_id;

    public function render()
    {
        
        if(isset($this->sub_category_id)){
            $products = Product::where('product_sub_categories_id',$this->sub_category_id)->latest()->paginate(6, ['*'], 'productiesCategorized');
            $data = [
                'products'=>$products,
            ];
        }

        if(isset($this->category_id)){
            $products = Product::where('product_categories_id',$this->category_id)->latest()->paginate(6, ['*'], 'productiesCategorized');
            $data = [
                'products'=>$products,
            ];
        }
        
        
        return view('livewire.product.index')->with($data);
    }
}
