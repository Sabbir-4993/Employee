@extends('admin.layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">name</th>
                                <th scope="col">Date Form</th>
                                <th scope="col">Date To</th>
                                <th scope="col">Type</th>
                                <th scope="col">Description</th>
                                <th scope="col">Replay</th>
                                <th scope="col">Status</th>
                                <th scope="col">Approve/Reject</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($leaves as $leave)
                                <tr>
                                    <th scope="row">{{$leave->id}}</th>
                                    <th>{{$leave->user->name}}</th>
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
                                        <a href="#" data-toggle="modal" data-target="#leaveModal{{$leave->id}}">
                                            Accept/Reject
                                        </a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="leaveModal{{$leave->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <form action="{{route('accept.reject',[$leave->id])}}" method="post">
                                                    @csrf

                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Leave Confirmation!!</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="">Status</label>
                                                                <select name="status" class="form-control" id="">
                                                                    <option value="0">Pending</option>
                                                                    <option value="1">Accept</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Message</label>
                                                                <textarea name="message" class="form-control" placeholder="Message" id="" cols="5" rows="2"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-danger">Update</button>
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
            </div>
        </div>
    </div>
@endsection
