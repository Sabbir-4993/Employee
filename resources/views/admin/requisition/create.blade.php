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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">{{ __('Requisition Information') }}</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <select class="form-control" name="project_name" id="" >
                                            <option value="">Select Project</option>

                                            @foreach(\App\project::all() as $project)
                                                <option value="{{$project->id}}">{{$project->project_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Date</label>
                                        <input type="text" name="date" class="form-control" placeholder="dd-mm-yyyy"  id="datepicker">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Mobile Number</label>
                                        <input type="text" name="mobile_number" class="form-control @error('mobile_number') is-invalid @enderror" >
                                        @error('mobile_number')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" >
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
                                                <th scope="col">Description of Particulars</th>
                                                <th scope="col">Qnty</th>
                                                <th scope="col">Unit</th>
                                                <th scope="col">Remarks</th>
                                                <th><a href="#" class="btn btn-primary addRow" id="addRow"><i class="fa fa-plus-square"></i></a></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input name="particular[]" class="form-control" type="text" ></td>
                                                <td><input name="quantity[]" class="form-control" type="number" ></td>
                                                <td><input name="unit[]" class="form-control" type="text" ></td>
                                                <td><input name="remarks[]" class="form-control" type="text" ></td>
                                                <td><a href="#" class="btn btn-danger remove" id="remove"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group mb-5">
                        <button class="btn btn-primary float-right" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection




