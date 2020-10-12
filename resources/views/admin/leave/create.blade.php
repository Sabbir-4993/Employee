@extends('admin.layouts.master')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
                @endif
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('leaves')}}">Leave</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Leave Form</li>
                    </ol>
                </nav>
                <form action="{{route('leaves.store')}}" method="POST">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">{{ __('Create Leave') }}</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Form Date</label>
                                        <input type="text" name="form" id="datepicker" class="form-control" required="">
                                        @error('form')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">To Date</label>
                                        <input type="text" name="to" id="datepicker1" class="form-control" required="">
                                        @error('to')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Type to Leave</label>
                                        <select class="form-control" name="" id="" required="">
{{--                                            <option value="">Select Your Leave Reason</option>--}}
                                            <option value="annualleave">Annual Leave</option>
                                            <option value="sickleave">Sick Leave</option>
                                            <option value="casualleave">Casual Leave</option>
                                            <option value="othersleave">Other Leave</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <button class="btn btn-primary float-right" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection



