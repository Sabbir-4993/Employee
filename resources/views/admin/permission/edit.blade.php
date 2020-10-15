@extends('admin.layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
                @endif
                <form action="{{route('permissions.update',[$permission->id])}}" method="POST" >
                    @csrf
                    {{method_field('PATCH')}}
                    <div class="card">
                        <div class="card-header">{{ __('Permission') }}</div>
                        <div class="card-body">
                            <div class="form-group">
{{--                                <label for="">Permission</label>--}}
                                <h3>{{$permission->role->name}}</h3>
                                <table class="table table-striped table-dark mt-3">
                                    <thead>
                                    <tr>
                                        <th scope="col">Permission</th>
                                        <th scope="col">can-add</th>
                                        <th scope="col">can-edit</th>
                                        <th scope="col">can-delete</th>
                                        <th scope="col">can-view</th>
                                        <th scope="col">can-list</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Department</td>
                                            <td><input type="checkbox" name="name[department][can-add]" @if(isset($permission['name']['department']['can-add'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-edit]" @if(isset($permission['name']['department']['can-edit'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-delete]" @if(isset($permission['name']['department']['can-delete'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-view]" @if(isset($permission['name']['department']['can-view'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-list]" @if(isset($permission['name']['department']['can-list'])) checked @endif value="1"></td>
                                        </tr>
                                        <tr>
                                            <td>Role</td>
                                            <td><input type="checkbox" name="name[role][can-add]" @if(isset($permission['name']['role']['can-add'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-edit]" @if(isset($permission['name']['role']['can-edit'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-delete]" @if(isset($permission['name']['role']['can-delete'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-view]" @if(isset($permission['name']['role']['can-view'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-list]" @if(isset($permission['name']['role']['can-list'])) checked @endif value="1"></td>
                                        </tr>
                                        <tr>
                                            <td>User</td>
                                            <td><input type="checkbox" name="name[user][can-add]" @if(isset($permission['name']['user']['can-add'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-edit]" @if(isset($permission['name']['user']['can-edit'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-delete]" @if(isset($permission['name']['user']['can-delete'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-view]" @if(isset($permission['name']['user']['can-view'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-list]" @if(isset($permission['name']['user']['can-list'])) checked @endif value="1"></td>
                                        </tr>
                                        <tr>
                                            <td>Permission</td>
                                            <td><input type="checkbox" name="name[permission][can-add]" @if(isset($permission['name']['permission']['can-add'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-edit]" @if(isset($permission['name']['permission']['can-edit'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-delete]" @if(isset($permission['name']['permission']['can-delete'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-view]" @if(isset($permission['name']['permission']['can-view'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-list]" @if(isset($permission['name']['permission']['can-list'])) checked @endif value="1"></td>
                                        </tr>
                                        <tr>
                                            <td>Leave Approval</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="checkbox" name="name[leave][can-list]" @if(isset($permission['name']['leave']['can-list'])) checked @endif value="1"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                @if(isset(auth()->user()->role->permission['name']['permission']['can-edit']))
                                    <button type="submit" class="btn btn-primary">Update</button>
                                @endif
                                <a href="{{route('permissions.index')}}" class="float-right">Back</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
