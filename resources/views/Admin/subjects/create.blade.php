@extends('layouts.app', ['page' => __('Schedule'), 'pageSlug' => 'Schedule'])

@section('content')

<style>
    .customYellow{
            background-image: linear-gradient(to bottom left, #ffc10e, #ffc10e, #ffc10e) !important;
    } 
    .customSet{
        background-color: white;
    }
    #name{
        color: black;
    }
    .customHeight{
        background-color: white;
    }
    .card .card-header:not([data-background-color]) {
    background-color: #ffbc00;
}
.card .card-header .card-title {
    color: black;
    font-weight: 100;
}
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card">

            <div class="col-md-12 customHeight">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title "><b>Subjects</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body customSet">
                    <form action="{{route('subjects.store')}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for=name>Subject Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Page Title" required="subject_name">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary customYellow">Create Subject</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<style>
    .modal-content {
        background-color: black !important;
        color: white;
        opacity: 1;
    }
</style>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
    $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 4,
        height: 200
      });
</script>
@endsection