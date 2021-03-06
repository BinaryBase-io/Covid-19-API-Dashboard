@extends('layouts.master')

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Official instructions and press releases</h1>
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
                <h3 class="card-title">All Official Instructions &amp; Press Releases</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm">
                        <a href="{{ URL::route('gov-press_create')}}"><button type="submit" class="btn btn-info"><i
                                    class="fas fa-plus"></i></button> </a>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div id="intro" class="card-body table-responsive p-0">
                <table class="table table-hover table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>URL</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach ($govs as $gov)
                        <tr>
                            <td>
                                {{$i}}
                                @php
                                    $i++;
                                @endphp
                            </td>
                            <td>{{$gov->name}}</td>
                            <td><a href="{{$gov->url}}" target="_blank">External URL</a></td>
                            <td>
                                @if ($gov->type == 1)
                                 Instructions
                                @elseif ($gov->type == 2)
                                    Press Releases
                                @endif
                            </td>
                            <td>
                                <button id="hotline_id" data-hotline_id="{{$gov->id}}" type="button" class="btn btn-danger  pull-right fa fa-trash-alt" data-toggle="modal" data-target="#modal-delete"> Delete</button>
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


  <div class="modal fade" id="modal-delete">
    <div class="modal-dialog">
      <div class="modal-content bg-danger">
        <div class="modal-header">
          <h4 class="modal-title">Delete Data</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form role="form" method="POST" action="{{route('gov-press_delete')}}">
          {{method_field('DELETE')}}
          {{ csrf_field() }}
          <div class="modal-body">
                  <input id="id" type="hidden" name="id" value="">
                  <p id="boo">Are you sure to delete this data&hellip;</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-outline-light">Yes, Sure</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

@endsection


@section('script')

<script type="text/javascript">


    $('#modal-delete').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('hotline_id')
    var modal = $(this)

    modal.find('.modal-body #id').val(id)
  })

  </script>

@endsection
