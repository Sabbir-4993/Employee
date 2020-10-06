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
                        <li class="breadcrumb-item"><a href="{{url('users')}}">Employee</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update Employee</li>
                    </ol>
                </nav>
                <form action="{{route('users.update',[$user->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PATCH')}}
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">{{ __('General Information') }}</div>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="">Full Name</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required="" value="{{$user->name}}">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Mobile Number</label>
                                        <input type="text" name="mobile_number" class="form-control @error('mobile_number') is-invalid @enderror" required="" value="{{$user->mobile_number}}">
                                        @error('mobile_number')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" required="" value="{{$user->address}}">
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Joining Date</label>
                                        <input type="date" name="start_form" class="form-control" placeholder="dd-mm-yyyy" required="" value="{{$user->start_form}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="" accept="image/*" value="{{$user->image}}">
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">{{ __('General Information') }}</div>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required="" value="{{$user->email}}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control" required="">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Department</label>
                                        <select class="form-control" name="department_id" id="" required="">
                                            <option value="">Select Department</option>

                                            @foreach(App\Department::all() as $department)
                                                <option value="{{$department->id}}" @if($user->department_id==$department->id) selected @endif>{{$department->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Role</label>
                                        <select class="form-control " name="role_id" id="" required="">
                                            <option value="">Select Role</option>

                                            @foreach(App\Role::all() as $role)
                                                <option value="{{$role->id}}" @if($user->role_id==$role->id) selected @endif>{{$role->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Designation</label>
                                        <input type="text" name="designation" class="form-control" required="" value="{{$user->designation}}">
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
