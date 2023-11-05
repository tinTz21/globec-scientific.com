<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Product;
use App\Models\Quote;
use App\Models\ProductSubCategory;
use App\Models\ProductCategory;
use Auth;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $category_name, $open_category_input, $category_id, $sub_category_name,$sub_cat_list, $openSubCategoryInput, $sub_category_id;

    public function mount(){
        $this->open_category_input = 0;
        $this->category_id = 0;
        $this->openSubCategoryInput = 0;
    }

    public function render()
    {
        $products = Product::latest()->paginate(6);
        $categories = ProductCategory::latest()->paginate(6, ['*'], 'categoryPage');

        $data = [
            'products' => $products,
            'categories'=>$categories,
        ];
        return view('livewire.dashboard.products')->with($data);
    }

    public function addCategory(){
        $validate = $this->validate([
            'category_name' => 'required',
        ]);

        if($this->category_id == '0'){
            $productCategory = ProductCategory::updateOrCreate(
                ['name'=>$this->category_name],
                ['creator_id'=>Auth::user()->id, 'updator_id'=>Auth::user()->id]
            );
        } else {
            $productCategory = ProductCategory::updateOrCreate(
                ['id'=>$this->category_id],
                ['name'=>$this->category_name, 'creator_id'=>Auth::user()->id, 'updator_id'=>Auth::user()->id]
            );
        }

        $this->open_category_input = 0; 
        $this->category_name = null;
    }

    public function openCategoryInput($open_var){
        $this->open_category_input = $open_var == 1 ? 1 : 0; 
    }

    public function editCategory($id){
        $this->open_category_input = 1;
        $category = ProductCategory::find($id);
        $this->category_name = $category->name;
        $this->category_id = $id;
    }

    public function deleteCategory($id){
        $deleteCategory = ProductCategory::find($id);
        $deleteCategory->delete();
    }

    public function openSubCategory($id){
        $this->open_category_input = 3;
        $category = ProductCategory::find($id);
        $this->category_name = $category->name;
        $this->category_id = $id;
        $this->sub_cat_list = $category->subCategory;
    }

    public function addSubCategory($id){
        $validate = $this->validate([
            'sub_category_name' => 'required',
        ]);
        // dd($id);
        // The $id is category id the $this->sub_category_id is sub-category id
        $category = ProductCategory::find($id);
        // dd();
        if($this->sub_category_id == null){
            // This block is for adding new record
            $addSubCategory = ProductSubCategory::updateOrCreate(
                ['product_categories_id'=>$category->id, 'name'=>$this->sub_category_name, 'creator_id'=>Auth::user()->id, 'updator_id'=>Auth::user()->id]
            );
        }
        else {
            // This block is for editing purpose
            $addSubCategory = ProductSubCategory::updateOrCreate(
                ['id'=>$this->sub_category_id],
                ['product_categories_id'=>$category->id, 'name'=>$this->sub_category_name, 'creator_id'=>Auth::user()->id, 'updator_id'=>Auth::user()->id]
            );
        }
        $this->sub_category_id == null;
        $this->sub_cat_list = $category->subCategory;
        $this->open_category_input == '3';
        $this->openSubCategoryInput = 0;
        $this->sub_category_name = null;
    }

    public function openSubCategoryInput(){
        $this->openSubCategoryInput = 1;
    }

    public function resetBack(){
        $this->open_category_input = 0;
    }

    public function resetSubCategory(){
        $this->sub_category_id == null;
        
        $this->open_category_input == '3';
        $this->openSubCategoryInput = 0;
        $this->sub_category_name = null;
    }

    public function deleteSubCategory($id){
        $subCategory = ProductSubCategory::find($id);
        $subCategory->delete();
    }

    public function editSubCategory($id){
        $sub_category = ProductSubCategory::find($id);
        $this->sub_category_name = $sub_category->name;
        $this->sub_category_id = $id;
        $this->openSubCategoryInput = 1;
    }

    public function openSubCategoryPopUp($id){
        // $this->open_category_input = 3;
        $category = ProductCategory::find($id);
        $this->category_name = $category->name;
        $this->category_id = $id;
        $this->sub_cat_list = $category->subCategory;
    }
}
