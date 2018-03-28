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
                 {!! Form::text('name', null, ['class' => 'form-control','required','placeholder'=>'Enter Company name']) !!}
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label>Address:</label>
                 {!! Form::textarea('address',null, ['class' => 'form-control' ,'required']) !!}
            @if ($errors->has('address'))
                <span class="text-danger">{{ $errors->first('address') }}</span>
            @endif
        </div>


        <div class="form-group">
            <label>Postal code:</label>
             {!! Form::text('postalCode',null, array('class'=>'form-control','required' ,'placeholder'=>'Enter Postal Code')) !!}
            @if ($errors->has('postalCode'))
                <span class="text-danger">{{ $errors->first('postalCode') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label>Province:</label>
             {!! Form::text('province',null, array('class'=>'form-control','required' ,'placeholder'=>'Enter Province')) !!}
            @if ($errors->has('province'))
                <span class="text-danger">{{ $errors->first('province') }}</span>
            @endif
        </div>

         <div class="form-group">
            <label>Country:</label>
             {!! Form::text('country', null, array('placeholder' => 'Search Text','class' => 'form-control','id'=>'search_text')) !!}
            @if ($errors->has('country'))
                <span class="text-danger">{{ $errors->first('country') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label>Contact:</label>
             {!! Form::text('contactNumber',null, array('class'=>'form-control','required' ,'placeholder'=>'Enter Contact number')) !!}
            @if ($errors->has('contactNumber'))
                <span class="text-danger">{{ $errors->first('contactNumber') }}</span>
            @endif
        </div>
         <div class="form-group">
            <label>Email:</label>
             {!! Form::text('email',null, array('class'=>'form-control','required' ,'placeholder'=>'Enter Province')) !!}
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label>Website:</label>
             {!! Form::text('url',null, array('class'=>'form-control','required' ,'placeholder'=>'Enter Province')) !!}
            @if ($errors->has('url'))
                <span class="text-danger">{{ $errors->first('url') }}</span>
            @endif
        </div>
         <div class="form-group">
            <label>Bank Number:</label>
             {!! Form::text('bankNumber',null, array('class'=>'form-control','required' ,'placeholder'=>'Enter Province')) !!}
            @if ($errors->has('bankNumber'))
                <span class="text-danger">{{ $errors->first('bankNumber') }}</span>
            @endif
        </div>


        

        <div class="form-group">
                      {!! Form::submit('ADD', array('class'=>'btn btn-success btn-submit')) !!}
            
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
