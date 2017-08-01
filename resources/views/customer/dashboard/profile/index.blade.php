@extends('customer.dashboard.layouts.layouts')

@section('content')
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-block">
                <center class="m-t-30"> <img src="{{ asset('images/images.jpg') }}" class="img-circle" width="150" />
                    <h4 class="card-title m-t-10">{{ Auth::user()->name }}</h4>
                </center>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <div class="card-block">
                <form class="form-horizontal form-material" method="post" action="{{ route('customer_profile.update', ['id' => Auth::user()->id]) }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-md-12">Full Name</label>
                        <div class="col-md-12">
                            <input type="text" value="{{ Auth::user()->name }}" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input type="email" value="{{ Auth::user()->email }}" disabled class="form-control form-control-line" name="example-email" id="example-email">
                        </div>
                    </div>
                    {{-- <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                        <label class="col-md-12">Phone Number</label>
                        <div class="col-md-12">
                            @if(!empty(Auth::user()->profile->phone_number))
                                <input type="text" value="{{ Auth::user()->profile->phone_number }}" disabled class="form-control form-control-line">
                            @else
                                <input type="text" name="phone_number" placeholder="Enter your phone number" class="form-control form-control-line">
                            @endif

                            @if($errors->has('phone_number'))
								<span class="help-block">{{ $errors->first('phone_number') }}</span>
							@endif
                        </div>
                    </div> --}}
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label class="col-md-12">Username</label>
                        <div class="col-md-12">
                            @if(!empty(Auth::user()->username))
                                <label disabled class="form-control form-control-line"> {{ Auth::user()->username }} </label>
                            @else
                                <label class="form-control form-control-line"> Your username is not set, contact olive now. </label>
                               
                            @endif
                        </div>
                    </div>
                   {{--  <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label class="col-md-12">Address</label>
                        <div class="col-md-12">
                            <label rows="5" name="address" class="form-control form-control-line">kdk{{ Auth::user()->profile->address }}</label>

                            @if($errors->has('address'))
								<span class="help-block">{{ $errors->first('address') }}</span>
							@endif
                        </div>
                    </div> --}}
{{--                     <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                        <label class="col-md-12">Sex</label>
                        <div class="col-md-12">
                            <label class="radio-inline">
                                <label name="sex"
                                @if(isset(Auth::user()->profile->sex) )
                                    {{Auth::user()->profile->sex}}
                                @endif
                                ></label>
                            </label>  
                            
                        </div>
                    </div> --}}
                    <div class="form-group col-sm-12">
                        <label > Account Type:</label>
                        <label >{{ $users->accounts->pluck('account_name')->values()->implode('account_name', ' ') }}</label>
                    </div>

                    <div class="form-group col-sm-12">
                        <label > Account Balance:</label>
                        <label style="color:red;"> {{ $users->accounts->pluck('account_balance')->values()->implode('account_balance', ' ') }}</label>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
@stop

@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Profile</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </div>
</div>
@stop