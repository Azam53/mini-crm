@extends('layouts.main')
@section('content')


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Subscriptions</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                   
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Add Subscription Tab
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">

                                     <span class="label label-warning pull-right">All fields are mandatory</span>
                                    
    {!! Form::open(array('route' => 'subscription.store', 'class' => 'form', 'action' => 'post')) !!}


        {{ csrf_field() }}
        <div class="form-group">
            <label>Company *:</label>
             {!! Form::text('companyId', null, array('placeholder' => 'Search company','class' => 'form-control','id'=>'search_company')) !!}
            @if ($errors->has('companyId'))
                <span class="text-danger">{{ $errors->first('companyId') }}</span>
            @endif
        </div>


        <div class="form-group">
            <label>Service *:</label>
             {!! Form::text('serviceId', null, array('placeholder' => 'Search service','class' => 'form-control','id'=>'search_service')) !!}
            @if ($errors->has('serviceId'))
                <span class="text-danger">{{ $errors->first('serviceId') }}</span>
            @endif
        </div>

         <div class="form-group">
            <label>Recurring *:</label>
             {{ Form::select('recurring', array('1' => 'Yes','0' => 'No'), null, ['class' => 'form-control']) }}
            @if ($errors->has('recurring'))
                <span class="text-danger">{{ $errors->first('recurring') }}</span>
            @endif
        </div>

         <div class="form-group">
            <label>End Date *:</label>
             {{ Form::text('endDate', '', array('id' => 'datepicker_end','class' => 'form-control')) }}
            @if ($errors->has('endDate'))
                <span class="text-danger">{{ $errors->first('endDate') }}</span>
            @endif
        </div>

         <div class="form-group">
            <label>Start Date *:</label>
             {{ Form::text('startDate', '', array('id' => 'datepicker_start','class' => 'form-control')) }}
            @if ($errors->has('startDate'))
                <span class="text-danger">{{ $errors->first('startDate') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label>Rate *:</label>
             {{ Form::select('rate', array('1' => 'Yes','0' => 'No'), null, ['class' => 'form-control']) }}
            @if ($errors->has('rate'))
                <span class="text-danger">{{ $errors->first('rate') }}</span>
            @endif
        </div>

         <div class="form-group">
            <label>Discount (%) :</label>
             {{ Form::text('discount', '', array('class' => 'form-control','placeholder'=>'Enter discount')) }}
            @if ($errors->has('discount'))
                <span class="text-danger">{{ $errors->first('discount') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label>Description :</label>
             {!! Form::textarea('description',null, array('class'=>'form-control','placeholder'=>'Enter description')) !!}
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
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
