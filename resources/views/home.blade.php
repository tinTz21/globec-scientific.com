@extends('layouts.app')

@section('content')
<div class="container-fluid" style="margin-top: 1em;">
    <div class="row ">
        <div class="col-md-12">

            <div class="card ">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-4" style="margin-top: 1em;">
                            <div class="card">
                                <div class="card-header">
                                    Products & Solutions ( {{\App\Models\Product::all()->count()}} )
                                </div>
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <div class="row">
                                            @foreach($products as $product)
                                                <div class="col-md-12">
                                                      
                                                    <a href="{{route('show-product',$product->id)}}" style="text-decoration: none;">
                                                        {{$product->name}} &nbsp; <i class="bi-eye" style="font-size: 1em;"></i>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    Last product created at {{$products[0]->created_at->format('d M Y')}}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" style="margin-top: 1em;">
                            <div class="card">
                                <div class="card-header">
                                    Customers ( {{\App\Models\Quote::all()->count()}} )
                                </div>
                                <div class="card-body">
                                    @foreach($customers as $customer)
                                        <div class="col-md-12">
                                             
                                            <a href="{{route('show-customers',$customer->id)}}" style="text-decoration: none;">
                                                {{$customer->name}} &nbsp; <i class="bi-eye" style="font-size: 1em;"></i>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="card-footer">
                                    Last quote created at {{$customers[0]->created_at->format('d M Y')}}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" style="margin-top: 1em;">
                            <div class="card">
                                <div class="card-header">
                                    News ( {{\App\Models\News::all()->count()}} )
                                </div>
                                <div class="card-body">
                                    @foreach($news as $blog)
                                        <div class="col-md-12">
                                            {{$blog->name}} &nbsp; 
                                            <a href="{{route('more-news',$blog->id)}}" style="text-decoration: none;">
                                                <i class="bi-eye" style="font-size: 1em;"></i>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="card-footer">
                                    Last news created at {{$news[0]->created_at->format('d M Y')}}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" style="margin-top: 1em;">
                            <div class="card">
                                <div class="card-header">
                                    Testimonials ( 0 )
                                </div>
                                <div class="card-body">
                                    null
                                </div>
                                <div class="card-footer">
                                    Last Testimony created at: null
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" style="margin-top: 1em;">
                            <div class="card">
                                <div class="card-header">
                                    Careers ( 0 )
                                </div>
                                <div class="card-body">
                                    null
                                </div>
                                <div class="card-footer">
                                     Last Careers created at: null
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
