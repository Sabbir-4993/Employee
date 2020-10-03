@extends('admin.layouts.master')

@section('content')

    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">
                    Register Employee
                </li>
            </ol>
        </nav>
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif
        <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> General Information</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="firstname" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="lastname" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="">Mobile Number</label>
                                <input type="text" name="mobile_number" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="">Department</label>
                                <select name="department_id" id="" required="">
                                    @foreach(App\Department::all() as $department)
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Start Date</label>
                                <input type="date" name="start_date" class="form-control" placeholder="dd-mm-yyyy" required="">
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control" accept="image/*" required="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">Login Information</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="">Role</label>
                                <select class="form-control" name="role_id" id="" required="">

                                    @foreach(App\Role::all() as $role )
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
