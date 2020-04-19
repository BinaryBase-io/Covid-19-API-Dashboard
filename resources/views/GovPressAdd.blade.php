@extends('layouts.master')

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add New Official Instructions &amp; Press Releases</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@endsection

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Add New Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" role="form" method="POST" action={{route('gov-press_add')}} id="quickForm">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="title" class="col-sm-4 col-form-label">Title</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="url" class="col-sm-4 col-form-label">URL</label>
                        <div class="col-sm-8">
                            <input type="text" name="url" class="form-control" id="url" placeholder="URL">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-sm-4 col-form-label">Type</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="type" id="type">
                                <option value="1">Instructions</option>
                                <option value="2">Press Releases</option>
                              </select>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info float-right">Submit</button>
                   <a class="btn btn-default" href="{{ route('hotline')}}">Cancel</a>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </div>
</div>

@endsection
