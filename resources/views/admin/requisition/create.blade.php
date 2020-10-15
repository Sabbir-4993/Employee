@extends('admin.layouts.master')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
                @endif
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('users')}}">Requisition</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Requisition</li>
                    </ol>
                </nav>
                <form action="{{route('requisitions.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header">{{ __('Requisition Information') }}</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Project Name</label>
                                        <input type="text" name="project_name" class="form-control @error('project_name') is-invalid @enderror" required="">
                                        @error('project_name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Select Employee</label>
                                        <select class="form-control" name="user_id" id="" required="">
                                            <option value="">Select Employee</option>

                                            @foreach(App\User::all() as $user)
                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Date</label>
                                        <input type="text" name="date" class="form-control" placeholder="dd-mm-yyyy" required="" id="datepicker">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Mobile Number</label>
                                        <input type="text" name="mobile_number" class="form-control @error('mobile_number') is-invalid @enderror" required="">
                                        @error('mobile_number')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" required="">
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">{{ __('Requisition Details') }}</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Description of Particulars</th>
                                                <th scope="col">Qnty</th>
                                                <th scope="col">Unit</th>
                                                <th scope="col">Remarks</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><input name="particular" type="text"></td>
                                                <td><input name="qnty" type="number"></td>
                                                <td><input name="unit" type="text"></td>
                                                <td><textarea name="remarks" id="" cols="30" rows="2"></textarea></td>
                                                <td><input name="add" type="button" class="btn btn-primary" value="ADD"></td>
                                            </tr>
                                            </tbody>
                                        </table>
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
