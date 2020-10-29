@extends('layouts.app', ['page' => __('forstudent'), 'pageSlug' => 'forstudent'])

@section('content')

<style>
    #customSetting{
        color: black;
    }
    .customColor{
        background-color: white;
    }
    .text-light {
    color: #171819 !important;
    }
    .customYellow{
        background-image: linear-gradient(to bottom left, #ffc10e, #ffc10e, #ffc10e) !important;
    }
    .card .card-header:not([data-background-color]) {
    background-color: #ffbd05;
    }
    .card h5, .card h6, .card p {
    color: rgb(25 23 23 / 80%);
   }
   .card .card-header .card-title {
    color: black;
    font-weight: 100;
    }
    .card .card-header .card-category {
    color: black;
    margin-bottom: 5px;
    font-weight: 300; 
    }
    .customColoring{
        background-color: white;
    }
    .table>tbody>tr>td, .table>tfoot>tr>td {
    border-color: rgb(255 218 1);
    padding: 12px 7px;
    vertical-align: middle;
}

</style>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">For Students Posters</h5>
                </div>

                <div class="col-md-12 customColoring">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Edit</h4>
                            <p class="card-category"> click on text after changings save this</p>
                        </div>
                        <div class="card-body customColor">
                            <div class="table-responsive">

                                <table class="table">
                                    <thead class=" text-primary" id="customSetting">
                                    <th id="customSetting">ID</th>
                                    <th id="customSetting">Title</th>
                                    <th id="customSetting">Description</th>
                                    <th id="customSetting">Action</th>

                                    </thead>
                                    <tbody>
                                    @foreach($data as $datum)
                                        <form action="{{route('editforStudent',[$datum->id])}}" method="post">
                                            @csrf
                                            <tr>
                                                <td>{{$datum->id}}</td>
                                                <td><input type="text" name="title" class="text-light" value="{{$datum->title}}" style="background-color:transparent; border: none"></td>
                                                <td><textarea name="discription" id="" cols="50" rows="10" class="w-100 text-light" style="background-color:transparent !important; border: none">{{$datum->discription}}</textarea> </td>
                                                <td>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary customYellow">{{ __('save') }}</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </form>
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
