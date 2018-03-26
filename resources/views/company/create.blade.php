@extends('layouts.main')
@section('content')


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Companies</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                   
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-building fa-fw"></i> Add Company Tab
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    
    {!! Form::open(array('route' => 'company.store', 'class' => 'form', 'action' => 'post')) !!}


        {{ csrf_field() }}
        <div class="form-group">
            <label>Name:</label>
                 {!! Form::text('name', null, ['class' => 'form-control']) !!}
            @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('<title></title>') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label>Address:</label>
                 {!! Form::textarea('address', [], null, ['class' => 'form-control']) !!}
            @if ($errors->has('body'))
                <span class="text-danger">{{ $errors->first('body') }}</span>
            @endif
        </div>


                <div class="form-group">
            <label>Quantity:</label>
             {!! Form::text('quantity',null, array('class'=>'form-control','required' ,'placeholder'=>'')) !!}
            @if ($errors->has('body'))
                <span class="text-danger">{{ $errors->first('body') }}</span>
            @endif
        </div>

                <div class="form-group">
            <label>Total Price:</label>
             {!! Form::text('total_amount',null, array('class'=>'form-control','required' ,'placeholder'=>'')) !!}
            @if ($errors->has('body'))
                <span class="text-danger">{{ $errors->first('body') }}</span>
            @endif
        </div>

        

        <div class="form-group">
                      {!! Form::submit('Save', array('class'=>'btn btn-success btn-submit')) !!}
            
        </div>
       {!! Form::close() !!}
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                               
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
