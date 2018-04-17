@extends('layouts.main')
@section('content')


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Settings</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                   
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Add Settings Tab
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="col-lg-4">
                                <div class="panel panel-default">

                                

                                  <div class="panel-heading">
                                         <i class="fa fa-tags fa-fw"></i> Default Discount Rule
                                  </div>
                                    <div class="panel-body">
                                       
                                     {!! Form::model($setting,array('method' => 'PUT','route' => ['setting.update', $setting->id], 'class' => 'form')) !!}      


                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label>Discount %:</label>
                                                         {!! Form::text('discountRule', null, ['class' => 'form-control','required','placeholder'=>'Enter default discount rule']) !!}
                                                    @if ($errors->has('discountRule'))
                                                        <span class="text-danger">{{ $errors->first('discountRule') }}</span>
                                                    @endif
                                                </div>

                                                 <div class="form-group">
                                                          {!! Form::submit('SAVE', array('class'=>'btn btn-success btn-submit')) !!}
            
                                                 </div>

                                     {!! Form::close() !!}      

                                    </div>
                                </div>
                            </div>    

                               <!--  <div class="col-lg-8">

                                    
    {!! Form::open(array('route' => 'setting.store', 'class' => 'form', 'action' => 'post')) !!}


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
                      {!! Form::submit('ADD', array('class'=>'btn btn-success btn-submit')) !!}
            
        </div>
       {!! Form::close() !!}
                                </div> -->
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
