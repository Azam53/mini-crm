@extends('layouts.main')
@section('content')


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Services</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                   
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Add Service Tab
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    
    {!! Form::model($service,array('method' => 'PUT','route' => ['service.update', $service->id], 'class' => 'form')) !!}

        {{ csrf_field() }}
        <div class="form-group">
            <label>Name:</label>
                 {!! Form::text('serviceName', null, ['class' => 'form-control','required','placeholder'=>'Enter service name']) !!}
            @if ($errors->has('serviceName'))
                <span class="text-danger">{{ $errors->first('serviceName') }}</span>
            @endif
        </div>


        <div class="form-group">
            <label>Price:</label>
             {!! Form::number('price',null, array('class'=>'form-control','required' ,'placeholder'=>'Enter service price')) !!}
            @if ($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label>Description:</label>
             {!! Form::textarea('description',null, array('class'=>'form-control','required' ,'placeholder'=>'Enter description')) !!}
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
        </div>

         <div class="form-group ">
            <label>Vat %:</label>
            {!! Form::select('vat',[21 => 21,6 => 6,0 => 0],null, array('class'=>'form-control','required' )) !!}
            @if ($errors->has('vat'))
                <span class="text-danger">{{ $errors->first('vat') }}</span>
            @endif
        </div>
           
    @if(!empty($service->rate))  
         <div class="form-group">
            <label>Rate:</label>
            {!! Form::number('rate',null, array('class'=>'form-control' ,'placeholder'=>'Enter rate')) !!}
            @if ($errors->has('rate'))
                <span class="text-danger">{{ $errors->first('rate') }}</span>
            @endif
        </div>
     @endif   


        

        <div class="form-group">
                      {!! Form::submit('SAVE', array('class'=>'btn btn-success btn-submit')) !!}
            
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
