<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $category = ProductCategory::findOrFail($id);
        $check = count($category->subCategory)>0 ? 1 : null; 
        if(!is_null($check)){
            $data = [
                'sub_categories' => $category->subCategory, 
                'category' => $category,
                

            ];
            return view('product.category.show_sub_category')->with($data);
        } else {
            $products = Product::where('product_categories_id',$id)->latest()->get();
            // dd($products);
            $data = [
                'products' =>$products,
                'categories_id'=>$id
            ];
            return view('product.index')->with($data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sub_categorized_product(Request $request, $id)
    {
        // dd($id);
        $products = Product::where('product_sub_categories_id',$id)->latest()->get();
        $data = [
            'products' =>$products,
            'sub_category_id'=>$id
        ];
        return view('product.index')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
