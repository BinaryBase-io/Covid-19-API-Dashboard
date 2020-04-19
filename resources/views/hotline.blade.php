@extends('layouts.master')

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Hotline</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Hotline Table</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm">
                        <a href="{{ URL::route('hotline_create')}}"><button type="submit" class="btn btn-info"><i
                                    class="fas fa-plus"></i></button> </a>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div id="intro" class="card-body table-responsive p-0">
                <table class="table table-hover table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Number/URL</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hotlines as $hotline)
                        <tr>
                            <td>J{{$hotline->name}}</td>
                            <td>{{$hotline->number}}</td>
                            <td>{{$hotline->type}}</td>
                            <td> <button id="delete" type="button" class="btn btn-sm btn-warning fa fa-edit"></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

@endsection
