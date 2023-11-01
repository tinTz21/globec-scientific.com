@extends('layouts.home')

@section('content')
<div class="container-fluid">
    <style type="text/css">
        .i-circle {
            display: inline-block;
            background-color: #017C7A;
            color: #fff;
            border-radius: 50%;
            font-size: 22px;
            line-height: 30px; /* set to same size as width, height */
            width: 30px;
            height: 30px;
            text-align: center;
        }
    </style>

    <div class="justify-content-center">

        <div class="row bg-light" style="margin-top: 1%;">
            <div class="col-md-12" style="margin: 1em;">
                <a href="/" style="font-size: 18px; text-decoration: none;">{{Illuminate\Support\Str::limit($category->name, 40)}}</a> <a style="text-decoration: underline; font-size: 18px;"><i class="bi-arrow-right"></i> Sub-Categories</a>
            </div>
            @foreach($sub_categories as $category)
            <div style="margin: 1em; width: 28em;">
                <div class="card-body border" style="padding: 1em;">
                    <a href="{{route('sub_categorized_product',$category->id)}}" class="card-title " style="color: #017C7A; font-size: 18px; text-decoration: none;"> 
                        <span class="i-circle">
                            {{substr($category->name, 0, 1)}}
                        </span> 
                        &nbsp;
                            {{ Illuminate\Support\Str::limit($category->name, 20) }}
                    </a>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection