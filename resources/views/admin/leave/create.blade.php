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
                        <li class="breadcrumb-item"><a href="{{url('leaves')}}">Leave</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Leave Form</li>
                    </ol>
                </nav>
                <form action="{{route('leaves.store')}}" method="POST">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">{{ __('Create Leave') }}</div>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="">Form Date</label>
                                        <input type="text" name="form" class="form-control @error('form') is-invalid @enderror" placeholder="yy-mm-dd" required="" id="datepicker">
                                        @error('form')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">To Date</label>
                                        <input type="text" name="to" class="form-control @error('form') is-invalid @enderror" placeholder="yy-mm-dd" required="" id="datepicker1">
                                        @error('to')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Leave Reason</label>
                                        <select name="type" class="form-control" id="">
                                            <option value="">Select Leave Reason</option>
                                            <option value="annualleave">Annual Leave</option>
                                            <option value="sickleave">Sick Leave</option>
                                            <option value="casualleave">Casual Leave</option>
                                            <option value="other">Others Leave</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="description" class="form-control" placeholder="Details About Leave" id="" cols="10" rows="5"></textarea>
                                    </div>

                                    <br>
                                    <div class="form-group">
                                        <button class="btn btn-primary float-right" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-5">

            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date Form</th>
                    <th scope="col">Date To</th>
                    <th scope="col">Type</th>
                    <th scope="col">Description</th>
                    <th scope="col">Replay</th>
                    <th scope="col">Status</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($leaves as $leave)
                <tr>
                    <th scope="row">{{$leave->id}}</th>
                    <td>{{$leave->form}}</td>
                    <td>{{$leave->to}}</td>
                    <td>{{$leave->type}}</td>
                    <td>{{$leave->description}}</td>
                    <td>{{$leave->message}}</td>
                    <td>
                        @if($leave->status==0)
                            <span class="alert alert-danger">Pending</span>
                            @else
                            <span class="alert alert-success">Accept</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('leaves.edit',[$leave->id])}}"><i class="fas fa-edit"></i></a>
                    </td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#leaveModal{{$leave->id}}"><i class="fas fa-trash"></i></a>
                        <!-- Modal -->
                        <div class="modal fade" id="leaveModal{{$leave->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="{{route('leaves.destroy',[$leave->id])}}" method="post">
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
                </tbody>
            </table>
        </div>
    </div>


@endsection
