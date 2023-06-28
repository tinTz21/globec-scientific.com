<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Quote;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
        $data = [
            'products' => $products,
        ];
        return view('product.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product_quote($id)
    {
        $product = Product::findOrFail($id);
        $data = [
            'product' => $product,
        ];
        return view('product.quote')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submit_quote(Request $request, $id)
    {

        $product = Product::findOrFail($id);
        $quote = Quote::create(
            ['name'=>$request->name, 'email'=>$request->email, 'phone'=>$request->phone, 'institution'=>$request->institution, 'position'=>$request->position, 'country'=>$request->country, 'region'=>$request->region, 'description'=>$request->description,'product_id'=>$product->id]
        );
        $data = [
            'product'=>$product,
        ];
        return view('product.thanks_quote')->with($data);
    }

    public function show_product($id){
        $product = Product::findOrFail($id);
        $data = [
            'product' => $product,
        ];
        return view('dashboard.product.show')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Quote::findOrFail($id);
        $data = [
            'customer' => $customer,
        ];
        return view('dashboard.quote.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sorted($id)
    {
        $sorted = Quote::updateOrCreate(
            ['id'=>$id],
            ['status'=>1]
        );
        return redirect()->route('customers');
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
    public function customer_list()
    {
        $customers = Quote::latest()->get();
        $data = [
            'customers' => $customers,
        ];
        return view('dashboard.quote.index')->with($data);
    }
}
