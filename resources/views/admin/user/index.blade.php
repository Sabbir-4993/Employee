@extends('admin.layouts.master')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
                @endif
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Users</li>
                    </ol>
                </nav>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SN</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Designation</th>
                        <th>Role</th>
                        <th>Department</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Start Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(
                        count($users)>0
                        )

                        @foreach($users as $key => $user)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td><img src="{{asset('profile')}}/{{$user->image}}" width="100" alt=""></td>
                                <td class="text-center">{{$user->name}}</td>
                                <td class="text-center">{{$user->email}}</td>
                                <td class="text-center"><span class="badge badge-success">{{$user->designation}}</span></td>
                                <td class="text-center">{{$user->role->name ?? ''}}</td>
                                <td class="text-center">{{$user->department->name ?? ''}}</td>
                                <td class="text-center">{{$user->mobile_number}}</td>
                                <td class="text-center">{{$user->address}}</td>
                                <td>{{$user->start_form}}</td>
                                <td class="text-center">
                                    @if(isset(auth()->user()->role->permission['name']['user']['can-edit']))
                                        <a href="{{route('users.edit',[$user->id])}}"><i class="fas fa-edit"></i></a></td>
                                    @endif
                                <td class="text-center">
                                    @if(isset(auth()->user()->role->permission['name']['user']['can-delete']))
                                        <a href="#" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash"></i></a>
                                    @endif
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form action="{{route('users.destroy',[$user->id])}}" method="post">
                                                @csrf
                                                {{method_field('DELETE')}}

                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Confirm!!</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Do you Want to Delete ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Modal End -->
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <td>No User to Display</td>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
