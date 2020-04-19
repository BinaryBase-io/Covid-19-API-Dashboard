@extends('layouts.master')

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Covid-19 information, Bangladesh</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Covid-19 Status Update<small> #Last Update:
                        {{\Carbon\Carbon::parse($jsonBGD->lastUpdate)->diffForHumans()}} from API | {{\Carbon\Carbon::parse($statusBD->updated_at)->diffForHumans()}} From DB</small></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="POST" action={{route('status_update')}} id="quickForm">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_24_hour_infected">last_24_hour_infected</label>
                                    <input type="number" name="last_24_hour_infected" class="form-control"
                                        id="last_24_hour_infected" placeholder="last_24_hour_infected"
                                        value="{{$statusBD->last_24_hour_infected}}">
                                </div>
                                <div class="form-group">
                                    <label for="total_infected">total_infected</label>
                                    <input type="number" name="total_infected" class="form-control" id="total_infected"
                                        placeholder="total_infected" value="{{($jsonBGD->confirmed->value - $statusBD->total_infected) > 0 ?  $jsonBGD->confirmed->value : $statusBD->total_infected}}">
                                </div>
                                <div class="form-group">
                                    <label for="total_death">total_death</label>
                                    <input type="number" name="total_death" class="form-control" id="total_death"
                                        placeholder="total_death" value="{{($jsonBGD->deaths->value - $statusBD->total_death) > 0 ?  $jsonBGD->deaths->value : $statusBD->total_death}}">
                                </div>
                                <div class="form-group">
                                    <label for="total_recover">total_recover</label>
                                    <input type="number" name="total_recover" class="form-control" id="total_recover"
                                        placeholder="total_recover" value="{{($jsonBGD->recovered->value - $statusBD->total_recover) > 0 ?  $jsonBGD->recovered->value : $statusBD->total_recover}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="world_total_infected">world_total_infected</label>
                                    <input type="number" name="world_total_infected" class="form-control"
                                        id="world_total_infected" placeholder="world_total_infected"
                                        value="{{$json->confirmed->value}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="world_total_death">world_total_death</label>
                                    <input type="number" name="world_total_death" class="form-control"
                                        id="world_total_death" placeholder="world_total_death"
                                        value="{{$json->deaths->value}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="world_total_recover">world_total_recover</label>
                                    <input type="number" name="world_total_recover" class="form-control"
                                        id="world_total_recover" placeholder="world_total_recover"
                                        value="{{$json->recovered->value}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Global Data last update: {{\Carbon\Carbon::parse($json->lastUpdate)->diffForHumans()}}
                                        <br>
                                        {{($json->confirmed->value - $statusBD->world_total_infected) > 0 ? "UPDATE NOW" : ""}}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->

@endsection
