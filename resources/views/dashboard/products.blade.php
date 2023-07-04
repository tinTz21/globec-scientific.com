@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="row bg-light" style="margin-top: 1em;">
            <div class="container-fluid" style="padding: 1em">
                <div class="row">
                    <div class="col-md-10">
                        <h3 style="color: #017C7A;">
                            Our Products and Solutions
                        </h3>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <a href="{{route('add-product')}}" class="btn btn-outline-secondary rounded-pill">
                            Add New
                        </a>
                    </div>
                </div>  
            </div>

            <div class="table-responsive col-md-12">
                <table class="table" id="cvs" style="width:100%">
                <thead >
                <tr class="text-secondary">
                <th  style=" color: #707070 !important; "> No. </th>
                <th  style=" color: #707070 !important; "> Product </th>
                <th  style=" color: #707070 !important; "> Description </th>
                <th  style=" color: #707070 !important; "> Created At </th>
                <th  style=" color: #707070 !important;"> View </th>
                </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                          <td data-label="Level" style=" color: #707070 !important; "> {{@$loop->iteration}} </td>
                          <td data-label="Level" style=" color: #707070 !important; min-width: 10em;"> 
                            {{ Illuminate\Support\Str::limit($product->name, 30) }}

                          </td>
                          <td data-label="Level" style=" color: #707070 !important; ">
                            {{ Illuminate\Support\Str::limit($product->description, 150) }}
                            </td>
                          <td data-label="Level" style=" color: #707070 !important; "> {{@$product->created_at->format('d-m, Y')}} </td>
                          <td data-label="Level" style=" color: #707070 !important; "> 
                            <a href="{{route('show-product',$product->id)}}">
                                <i class="bi-eye" style="font-size: 2em; color: #017C7A;"></i>
                            </a>
                          </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>
@endsection