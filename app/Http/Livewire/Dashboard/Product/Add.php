<?php
 
namespace App\Http\Livewire\Dashboard\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Quote;
use App\Models\ProductSubCategory;
use App\Models\ProductCategory;
use Auth;

class Add extends Component
{
    public $category_id, $sub_category_list, $sub_category_id, $category_name, $description;

    public function mount(){
        $this->category_id = 0;
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
        return view('livewire.dashboard.product.add')->with($data);
    }

    public function storeProduct(){
        // dd($this->all());
        $validate = $this->validate([
            'category_name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);

        $product = Product::updateOrCreate(
            ['name'=>$this->category_name,'description'=>$this->description,'translator_id'=>Auth::user()->id, 'updator_id'=>Auth::user()->id, 'product_categories_id'=>$this->category_id, 'product_sub_categories_id'=>$this->sub_category_id]
        );

        $this->next = 1;
    }

    
}
