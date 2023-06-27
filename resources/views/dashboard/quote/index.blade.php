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
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Institution</th>
                            <th>Product Name &nbsp;</th> 
                            <th>Quoted At</th>
                            <th>Status &nbsp;</th>
                            <th>Show</th>
                        </tr>
                    </thead>
                    @foreach($customers as $customer)
                    <tbody>
                        <tr>
                            <td>
                                {{$customer->name}} &nbsp; &nbsp;
                            </td>

                            <td>
                                {{$customer->email}} &nbsp; &nbsp;
                            </td>
                            <td>
                                {{$customer->phone}} &nbsp; &nbsp;
                            </td>
                            <td>
                                {{$customer->institution}} &nbsp;
                            </td> 
                            <td style="color: {{isset($customer->product->name) ? 'green' : 'red'}};">
                                {{isset($customer->product->name) ? $customer->product->name : 'Product Deleted'}} &nbsp; &nbsp;
                            </td>
                            <td>
                                {{$customer->created_at->format('d M Y')}} &nbsp; &nbsp;
                            </td>
                            <td style="color: {{isset($customer->status) ? 'green' : 'red'}};">
                                {{isset($customer->status) ? 'Sorted' : 'Un-Sorted!'}} &nbsp;
                            </td> 
                            <td>
                                 <a href="{{route('show-customers',$customer->id)}}" >
                                     <i class="bi-eye" style="font-size: 2em;"></i>
                                 </a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection