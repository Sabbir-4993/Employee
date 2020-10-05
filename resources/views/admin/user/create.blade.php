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

                <form action="{{route('users.store')}}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">{{ __('General Information') }}</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="">Mobile Number</label>
                                <input type="text" name="mobile_number" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="">Department</label>
                                <select class="form-control" name="department_id" id="" >
                                    <option value="">Select Department</option>

                                    @foreach(App\Department::all() as $department)
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Role</label>
                                <select class="form-control" name="role_id" id="" >
                                    <option value="">Select Role</option>

                                    @foreach(App\Role::all() as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Joining Date</label>
                                <input type="date" name="start_date" class="form-control" placeholder="dd-mm-yyyy" >
                            </div>

                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control" accept="image/*" >
                            </div>

                            <br>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
