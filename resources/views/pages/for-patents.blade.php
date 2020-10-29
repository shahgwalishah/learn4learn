@extends('layouts.app', ['page' => __('forparents'), 'pageSlug' => 'forparents'])

@section('content')

<style>
    #customBlack{
        color: black;
    }
    .customCOlor{
        background-color: white;
    }
    .table>tbody>tr>td, .table>tfoot>tr>td {
    border-color: rgb(255 206 2);
    padding: 12px 7px;
    vertical-align: middle;
    }
    .text-light {
    color: #212223 !important;
    }
    .customYellow{
        background-image: linear-gradient(to bottom left, #ffc10e, #ffc10e, #ffc10e) !important;
    }
    .card .card-header:not([data-background-color]) {
    background-color: #fdc600;
    }
    .card h5, .card h6, .card p {
    color: rgb(19 17 17 / 80%);
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
</style>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">For Parents Posters</h5>
                </div>

                <div class="col-md-12 customColoring">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Edit</h4>
                            <p class="card-category"> click on text after changings save this</p>
                        </div>
                        <div class="card-body customCOlor">
                            <div class="table-responsive">

                                <table class="table">
                                    <thead class=" text-primary">
                                    <th id="customBlack">ID</th>
                                    <th id="customBlack">Title</th>
                                    <th id="customBlack">Description</th>
                                    <th id="customBlack">Action</th>

                                    </thead>
                                    <tbody>
                                    @foreach($data as $datum)
                                        <form action="{{route('editforParents',[$datum->id])}}" method="post">
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
