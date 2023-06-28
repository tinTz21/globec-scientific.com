@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="container-fluid bg-light" style="padding: 2em; margin-top: 1em;">
            <div class="row">
                <div class="col-md-9">
                    <h3 style="color: #017C7A;">
                        News
                    </h3>
                </div>
                <div class="col-md-3">
                    
                    <a href="{{route('add-news')}}" class="btn btn-outline-secondary rounded-pill">
                       <i class="bi-plus-circle"></i> Add New
                    </a>
                </div>
            </div>
            
            <div class="row d-flex justify-content-center" style="padding-top: 1em;">

                <div class="table-responsive col-md-12">
                <table class="table" id="cvs" style="width:100%">
                <thead >
                <tr class="text-secondary">
                <th  style=" color: #707070 !important; "> No. </th>
                <th  style=" color: #707070 !important; "> News </th>
                <th  style=" color: #707070 !important; "> Description </th>
                <th  style=" color: #707070 !important; "> Created At </th>
                <th  style=" color: #707070 !important;"> View </th>
                </tr>
                </thead>
                <tbody>
                    @foreach($news as $blog)
                        <tr>
                          <td data-label="Level" style=" color: #707070 !important; "> {{@$blog->iteration}} </td>
                          <td data-label="Level" style=" color: #707070 !important; "> {{@$blog->name}} </td>
                          <td data-label="Level" style=" color: #707070 !important; "> {{@$blog->description}} </td>
                          <td data-label="Level" style="width: 8em; color: #707070 !important; "> {{@$blog->created_at->format('d-m, Y')}} </td>
                          <td data-label="Level" style=" color: #707070 !important; "> 
                            <a href="{{route('more-news',$blog->id)}}">
                                <i class="bi-eye" style="font-size: 2em; color: #017C7A;"></i>
                            </a>
                          </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>

               {{-- @foreach($news as $blog)
               <div class="col-md-4" style="margin-top: 1em">
                   <div class="card" style="width: auto;">
                      <img src="{{ url(isset($blog->image) ? $blog->image : 'images/nopic.jpg') }}" alt="image" style="border-radius: 2px;max-width: 300px;">
                      <div class="card-body">
                        <h5 class="card-title">
                            {{$blog->name}}
                        </h5>
                        <p class="card-text">
                            {{$blog->description}} 
                        </p>

                        <a href="{{route('edit-news',$blog->id)}}" class="btn btn-outline-secondary rounded-pill" style="border-color: #33BAFA; color: #33BAFA;">Edit</a>
                        <a href="{{route('delete-news',@$blog->id)}}" class="btn btn-outline-secondary text-danger rounded-pill" style="border-color: red; color: red;">
                            <i class="bi-trash"></i> Delete
                        </a>
                        <a href="{{route('more-news',@$blog->id)}}" class="btn btn-outline-secondary rounded-pill" style="border-color: #33BAFA; color: #33BAFA;">
                            Learn More
                        </a>
                      </div>
                    </div>
               </div>
               @endforeach --}}
            </div>
        </div>

        </div>
    </div>
</div>
@endsection