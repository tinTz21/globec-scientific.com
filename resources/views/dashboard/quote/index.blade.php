@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="row bg-light" style="margin: 1em;">
            <div class="col-md-12" style="padding-top: 1em;">
                <h4>
                    Customer Lists
                </h4>    
            </div>
            <div class="col-md-12">
                <table class="table" id="cvs" style="width:100%">
                <thead >
                <tr class="text-secondary">
                <th  style=" color: #707070 !important; "> No. </th>
                <th  style=" color: #707070 !important; "> Name </th>
                <th  style=" color: #707070 !important; "> Institution </th>
                <th  style=" color: #707070 !important; "> Product Name </th>
                <th  style=" color: #707070 !important; "> Quoted At </th>
                <th  style=" color: #707070 !important; "> Status </th>
                <th  style=" color: #707070 !important;"> View </th>
                </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                        <tr>
                          <td data-label="Level" style=" color: #707070 !important; "> {{@$loop->iteration}} </td>
                          <td data-label="Level" style=" color: #707070 !important; "> {{@$customer->name}} </td>
                          <td data-label="Level" style=" color: #707070 !important; "> {{@$customer->institution}} </td>
                          <td data-label="Level" style="color: {{isset($customer->product->name) ? 'green' : 'red'}};">
                                {{isset($customer->product->name) ? $customer->product->name : 'Product Deleted'}} &nbsp; &nbsp;
                            </td>
                          <td data-label="Level" style=" color: #707070 !important; "> {{@$customer->created_at->format('d-m, Y')}} </td>
                          <td data-label="Level" style="color: {{isset($customer->status) ? 'green' : 'red'}};">
                                {{isset($customer->status) ? 'Sorted' : 'Un-Sorted!'}} &nbsp;
                            </td> 
                          <td data-label="Level" style=" color: #707070 !important; "> 
                            <a href="{{route('show-customers',$customer->id)}}" >
                                     <i class="bi-eye" style="font-size: 2em;"></i>
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
</div>
@endsection