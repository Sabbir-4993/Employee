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
                        <li class="breadcrumb-item"><a href="{{url('projects')}}">Project</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Project</li>
                    </ol>
                </nav>
                <form action="{{route('projects.update',[$project->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PATCH')}}
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">{{ __('Project Information') }}</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Project Name</label>
                                        <input type="text" name="project_name" class="form-control @error('project_name') is-invalid @enderror" required="" value="{{$project->project_name}}">
                                        @error('project_name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" required="" value="{{$project->address}}">
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Start Date</label>
                                        <input type="text" name="project_start" class="form-control" placeholder="dd-mm-yyyy" required="" id="datepicker" value="{{$project->project_start}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Project Status</label>
                                        <select name="status" class="form-control" id="" required="">
                                            <option value="">Select Project Status</option>
                                            <option value="Running">Running</option>
                                            <option value="Complete">Complete</option>
                                        </select>
                                    </div>

                                    <br>
                                    <div class="form-group">
                                        @if(isset(auth()->user()->role->permission['name']['project']['can-edit']))
                                            <button class="btn btn-primary float-right" type="submit">Update</button>
                                        @endif
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
