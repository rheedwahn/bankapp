@extends('customer.dashboard.layouts.layouts')

@section('content')
    <div class="row">
        <!-- Column -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Total Transactions Made</h4>
                    
                        {{ $transaction->count() }}
                   
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
@stop

@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center"> 
    </div>
</div>
@stop