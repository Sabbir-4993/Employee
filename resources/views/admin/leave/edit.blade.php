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
                <form action="{{route('leaves.update',[$leave->id])}}" method="POST">
                    @csrf
                    {{method_field('PATCH')}}
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">{{ __('Create Leave') }}</div>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="">Form Date</label>
                                        <input type="text" name="form" class="form-control @error('form') is-invalid @enderror" placeholder="yy-mm-dd" required="" id="datepicker" value="{{$leave->form}}">
                                        @error('form')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">To Date</label>
                                        <input type="text" name="to" class="form-control @error('form') is-invalid @enderror" placeholder="yy-mm-dd" required="" id="datepicker1" value="{{$leave->to}}">
                                         @error('to')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Leave Reason</label>
                                        <select name="type" class="form-control" id="">
                                            <option value="">Select Leave Reason</option>
                                            <option value="annualleave">Annual Leave</option>
                                            <option value="sickleave">Sick Leave</option>
                                            <option value="casualleave">Casual Leave</option>
                                            <option value="other">Others Leave</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="description" class="form-control" placeholder="Details About Leave" id="" cols="10" rows="5">{{$leave->description}}</textarea>
                                    </div>

                                    <br>
                                    <div class="form-group">
                                        <button class="btn btn-primary float-right" type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
