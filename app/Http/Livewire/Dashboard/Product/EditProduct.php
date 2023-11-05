<?php

namespace App\Http\Livewire\Dashboard\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Quote;
use App\Models\ProductSubCategory;
use App\Models\ProductCategory;
use Auth;
use Livewire\WithFileUploads;

class EditProduct extends Component
{   
    use WithFileUploads;

    public $category_id, $sub_category_list, $sub_category_id, $product_name, $product_description, $image, $product_id;

    public function mount(){
        $this->sub_category_list= null;
        $this->next = 0;
    }

    public function render()
    {
        // dd($this->category_id);
        $category = ProductCategory::find($this->category_id);

        if(!isset($category->subCategory)){
            $this->sub_category_list = null;
        } else {
            $this->sub_category_list = $category->subCategory;
        }

        $categories= ProductCategory::all();
        $data = [
            'categories'=>$categories,
        ];
        return view('livewire.dashboard.product.edit-product')->with($data);
    }

    public function storeProduct($id){
        $check_sub_category = is_null($this->sub_category_id) ? 0 : $this->sub_category_id; 
        // dd($this->image);
        $validate = $this->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'category_id' => 'required',
             'image' => 'image|max:5024'
        ]);
 
            $path = $this->image->store('products');
    
        
        // dd($this->all());
        $product = Product::updateOrCreate(
            ['id'=>$this->product_id],
            ['name'=>$this->product_name,'description'=>$this->product_description,'translator_id'=>Auth::user()->id, 'updator_id'=>Auth::user()->id, 'product_categories_id'=>$this->category_id, 'product_sub_categories_id'=>$check_sub_category, 'image'=>$path]
        );
        return redirect()->route('show-product',$product->id);
    }
}
