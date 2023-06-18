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
                                    Products & Solutions
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
                                    Careers
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
                                    News
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
                                    Testimonials
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
