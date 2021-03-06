@extends('layouts.app', ['page' => __('Schedule'), 'pageSlug' => 'Schedule'])
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title ">Subjects</h4>
                            </div>
                            <div class="col-6 text-right">
                            <a class="btn btn-primary" href="{{route('subjects.create')}}">Add New</a>
                            </div>
                        </div>
                    </div>
                    @if(session()->has('message'))
                        <div class="row">
                            <div class="alert alert-success" style="width: 100%;">
                                {{session()->get('message')}}
                            </div>
                        </div>
                    @endif

                    @if(session()->has('err_message'))
                        <div class="row">
                            <div class="alert alert-danger" style="width: 100%;">
                                {{session()->get('err_message')}}
                            </div>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table">
                                <thead class=" text-primary">
                                    <th>No.</th>
                                    <th>Subject Name</th>
                                    <th>Action</th>

                                </thead>
                                <tbody>
                                    @foreach($subjects as $sub)
                                    <tr>
                                    <td>{{$sub->id}}</td>
                                    <td>{{$sub->name}}</td>
                                        <td>
                                        <a data-toggle="modal" data-target="#myModal-{{$sub->id}}"
                                                class="btn btn-sm fa fa-edit"></a>
                                        <a href="{{route('subjects.delete',[$sub->id])}}"
                                                class="btn btn-sm fa fa-trash"></a>
                                        </td>
                                    </tr>


                                     <!-- Modal -->
                                     <div class="modal fade" id="myModal-{{$sub->id}}" role="dialog">
                                        <div class="modal-dialog">
                                        
                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Edit Details</h4>
                                            </div>
                                                <form action="{{route('subjects.update' ,[$sub->id])}}" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for=name>Subject Name</label>
                                                            <input type="text" value="{{$sub->name}}" style="color: #555;" class="form-control" name="name" id="name"
                                                            required="name">
                                                        </div>
                                                    </div>
                                                    </div>
                                                        <div class="modal-footer">
                                                        <button type="submit" class="btn btn-default">Update</button>
                                                        </div>
                                                </form>   
                                          </div>
                                        </div>
                                      </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection