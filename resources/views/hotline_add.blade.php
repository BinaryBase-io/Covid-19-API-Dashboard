@extends('layouts.master')

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add New Hotline</h1>
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
                <h3 class="card-title">Add New Hotline Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" role="form" method="POST" action={{route('hotline_add')}} id="quickForm">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="number" class="col-sm-4 col-form-label">Number/Link</label>
                        <div class="col-sm-8">
                            <input type="text" name="number" class="form-control" id="number" placeholder="Number/Link">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Title</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-sm-4 col-form-label">Type</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="type" id="type">
                                <option value="1">Phone Number</option>
                                <option value="2">Social Link</option>
                                <option value="3">Email Address</option>
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
