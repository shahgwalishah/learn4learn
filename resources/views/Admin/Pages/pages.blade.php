@extends('layouts.app', ['page' => __('Schedule'), 'pageSlug' => 'Schedule'])
@section('content')

<style>
    #customSet{
        color: black;
    }
    .customYellow{
            background-image: linear-gradient(to bottom left, #ffc10e, #ffc10e, #ffc10e) !important;
    } 
    .customSetting{
        background-color: white;
    }
    .table>tbody>tr>td, .table>tfoot>tr>td {
        border-color: rgb(255 184 6);
        padding: 12px 7px;
        vertical-align: middle;
    }
    .table>tbody>tr>td {
        color: rgb(0 0 0) !important;
    }
    .customSet{
        background-color: white;
    }
    .card .card-header:not([data-background-color]) {
    background-color: #fffffffc;
    }
    .card .card-header .card-title {
    color: black;
    font-weight: 100;
    }
    
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card">

            <div class="col-md-12 customSet">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title "><b>Pages</b></h4>
                            </div>
                            <div class="col-6 text-right">
                                <a class="btn btn-primary customYellow" href="{{route('pages.create')}}">Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body customSetting">
                        <div class="table-responsive">

                            <table class="table">
                                <thead class=" text-primary">
                                    <th id="customSet">No.</th>
                                    <th id="customSet">Title</th>
                                    <th id="customSet">Content</th>
                                    <th id="customSet">visibility</th>
                                    <th id="customSet">Action</th>

                                </thead>
                                <tbody>
                                    @if ($pages)
                                    @foreach($pages as $key => $page)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td width="20%">{{$page->title}}</td>
                                        <td width="50%">{{Str::limit($page->page, 150, '...')}}</td>

                                        <td>{{$page->visibility ? 'Public' : 'Private' }}</td>
                                        <td>
                                            <a href="{{route('pages.edit', $page->id)}}"
                                                class="btn btn-sm fa fa-edit customYellow"></a>
                                            <a href="{{route('pages.destroy', $page->id)}}"
                                                class="btn btn-sm fa fa-trash customYellow"></a>
                                            <a href="{{route('pages.show', $page->slug)}}"
                                                class="btn btn-sm fa fa-eye customYellow"></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif

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