@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 112
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-4" style="margin-top: 1em;">
                            <div class="card">
                                <div class="card-header">
                                    Products
                                </div>
                                <div class="card-body">
                                    
                                </div>
                                <div class="card-footer">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" style="margin-top: 1em;">
                            <div class="card">
                                <div class="card-header">
                                    Training
                                </div>
                                <div class="card-body">
                                    
                                </div>
                                <div class="card-footer">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" style="margin-top: 1em;">
                            <div class="card">
                                <div class="card-header">
                                    
                                </div>
                                <div class="card-body">
                                    
                                </div>
                                <div class="card-footer">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" style="margin-top: 1em;">
                            <div class="card">
                                <div class="card-header">
                                    
                                </div>
                                <div class="card-body">
                                    
                                </div>
                                <div class="card-footer">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" style="margin-top: 1em;">
                            <div class="card">
                                <div class="card-header">
                                    
                                </div>
                                <div class="card-body">
                                    
                                </div>
                                <div class="card-footer">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" style="margin-top: 1em;">
                            <div class="card">
                                <div class="card-header">
                                    Blogs
                                </div>
                                <div class="card-body">
                                    
                                </div>
                                <div class="card-footer">
                                    
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
