 @extends('layouts.app')

@section('content')
<div class="container-fluid" style="margin-top: 1em;">
    <div class="row ">
        <div class="col-md-12">

            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            {{ __('Manage Staff(s)') }}
                        </div>
                        <div class="col-md-2">
                            <a href="{{route('add-staff')}}" class="btn btn-outline-secondary " style="align-items: right;">
                                Add New
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="table-responsive col-md-12">
                            <table class="table" id="cvs" style="width:100%">
                            <thead >
                            <tr class="text-secondary">
                            <th  style=" color: #707070 !important; "> No. </th>
                            <th  style=" color: #707070 !important; "> Name </th>
                            <th  style=" color: #707070 !important; "> Position </th>
                            <th  style=" color: #707070 !important;"> Edit </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                      <td data-label="Level" style=" color: #707070 !important; "> {{@$loop->iteration}} </td>
                                      <td data-label="Level" style=" color: #707070 !important; "> {{@$user->name}} </td>
                                      <td data-label="Level" style=" color: #707070 !important; "> {{@$user->type}} </td>
                                      <td data-label="Level" style=" color: #707070 !important; "> 
                                        <a href="{{route('edit-staff',$user->id)}}">
                                            <i class="bi-pencil-square" style="font-size: 1em; color: #017C7A;"></i>
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
    </div>
</div>
@endsection
