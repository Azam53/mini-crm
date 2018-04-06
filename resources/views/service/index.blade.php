@extends('layouts.main')
@section('content')


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Services</h1>
                </div>
                <!-- /.col-lg-12 -->

                @if(Session::has('success'))
                    <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                    Session::forget('success');
                    @endphp
                    </div>
                @endif
            </div>

            <div class="row">
                <div class="col-lg-12">
                   
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Services Tab
                            <div class="pull-right">
                                <div class="btn-group">
                                  <a href="{{url('service/create')}}"><button class="btn btn-info btn-xs " > Add Service </button></a>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($services as $service)    
                                                <tr>
                                                    <td>{{ $service->id }}</td>
                                                    <td>{{ $service->serviceName }}</td>
                                                    <td><span class="pull-left service">
                                                        {{ Form::open(['method' => 'GET','route' => ['service.edit', $service->id]]) }}
                                                        {{ Form::submit('Edit', ['class' => 'btn btn-primary','title' => 'edit']) }}
                                                        {{ Form::close() }}
                                                        </span>
                                                        <span class="pull-left service">
                                                        {{ Form::open(['method' => 'DELETE', 'route' => ['service.destroy', $service->id]]) }}
                                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger','title' => 'delete']) }}
                                                        {{ Form::close() }}
                                                        <span>
                                                    </td>
                                                </tr>
                                            @endforeach    
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                   
                </div>
               
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
@endsection
