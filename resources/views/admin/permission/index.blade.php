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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Permissions</li>
                    </ol>
                </nav>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Edit</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if(
                        count($permissions)>0
                        )

                        @foreach($permissions as $key => $permission)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$permission->role->name}}</td>
                                <td><a href="{{route('permissions.edit',[$permission->id])}}"><i class="fas fa-edit"></i></a></td>

                                <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form action="#" method="post">
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
{{--                                </td>--}}
                            </tr>
                        @endforeach
                    @else
                        <td>No Permission to Display</td>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
