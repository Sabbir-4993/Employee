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
                <form action="{{route('mails.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Select</label>
                                <select id="mail" class="form-control" id="">
                                    <option value="0">Mail to All Staff</option>
                                    <option value="1">Choose Department</option>
                                    <option value="2">Choose Employee</option>
                                </select>
                                <br>
                                <div id="department">
                                    <select name="department" class="form-control">
                                        <option value="">Select</option>
                                        @foreach(App\Department::all() as $department)
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <div id="person">
                                    <select name="person" class="form-control">
                                        <option value="">Select</option>
                                        @foreach(App\User::all() as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="">Body</label>
                                    <textarea name="body" class="form-control @error('body') is-invalid @enderror" id="" cols="30" rows="5"></textarea>
                                    @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="file" name="file" class="form-control">
                                    @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
