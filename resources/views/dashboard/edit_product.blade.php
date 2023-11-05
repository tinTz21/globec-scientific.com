@extends('layouts.app')

@section('content') 
    @livewireStyles
        @livewire('dashboard.product.edit-product',['category_id'=>$category_id,'sub_category_id'=>$sub_category_id, 'product_name'=>$product->name, 'product_description'=>$product->description, 'image'=>$product->image,'product_id'=>$product->id])
    @livewireScripts
@endsection