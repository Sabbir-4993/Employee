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

                <form action="{{route('notices.update', [$notice->id])}}" method="post">
                    @csrf
                    {{method_field('PATCH')}}
                    <div class="card">
                        <div class="card-header">{{ __('Update Notices') }}</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$notice->title}}">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>no
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id="" cols="30" rows="5" class="form-control @error('description') is-invalid @enderror">{{$notice->description}}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>From Date</label>
                                <input type="text" name="date" class="form-control" placeholder="dd-mm-yyyy" required="" id="datepicker" value="{{$notice->date}}">
                                @error('date')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Created By</label>
                                <input type="text" name="name" class="form-control" required="" value="{{$notice->name}}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                @if(isset(auth()->user()->role->permission['name']['notice']['can-edit']))
                                <button type="submit" class="btn btn-primary">Update</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
