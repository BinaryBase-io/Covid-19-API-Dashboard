@extends('layouts.master')

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Covid-19 Dashboard</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@endsection

@section('content')

<div class="card direct-chat direct-chat-primary">
    <div class="card-header">
        <h3 class="card-title">Bangladesh Situation <small>#Last Update:
            {{\Carbon\Carbon::parse($jsonBGD->lastUpdate)->diffForHumans()}} from API | {{\Carbon\Carbon::parse($statusBD->updated_at)->diffForHumans()}} From DB</small></h3>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$statusBD->last_24_hour_infected}}</h3>

                        <p>Confirmed in last 24 hours</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-viruses"></i>
                    </div>
                    <a href="#" class="small-box-footer">...</a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{$statusBD->total_infected}} | {{$jsonBGD->confirmed->value}}</h3>

                        <p>Confirmed</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-virus"></i>
                    </div>
                    <a href="#" class="small-box-footer">...</a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{$statusBD->total_death}} | {{$jsonBGD->deaths->value}}</h3>

                        <p>Deaths</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-skull-crossbones"></i>
                    </div>
                    <a href="#" class="small-box-footer">...</a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$statusBD->total_recover}} | {{$jsonBGD->recovered->value}}</h3>

                        <p>Recovered</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shield-virus"></i>
                    </div>
                    <a href="#" class="small-box-footer">...</a>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div>
</div>

<div class="card direct-chat direct-chat-primary">
    <div class="card-header">
        <h3 class="card-title">Global Situation <small> #Last Update:
            {{\Carbon\Carbon::parse($json->lastUpdate)->diffForHumans()}} from API | {{\Carbon\Carbon::parse($statusBD->updated_at)->diffForHumans()}} From DB</small></h3>
    </div>

    <div class="card-body">
        <div class="row">
            {{-- <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Confirmed in last 24 hours</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-viruses"></i>
                    </div>
                    <a href="#" class="small-box-footer">...</a>
                </div>
            </div> --}}
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{$json->confirmed->value}}</h3>

                        <p>Confirmed</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-virus"></i>
                    </div>
                    <a href="#" class="small-box-footer">...</a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{$json->deaths->value}}</h3>

                        <p>Deaths</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-skull-crossbones"></i>
                    </div>
                    <a href="#" class="small-box-footer">...</a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$json->recovered->value}}</h3>

                        <p>Recovered</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shield-virus"></i>
                    </div>
                    <a href="#" class="small-box-footer">...</a>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div>
</div>

@endsection
