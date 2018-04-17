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
                            <i class="fa fa-building fa-fw"></i> Send quote to company
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    
    {!! Form::open(array('route' => 'quote.send', 'class' => 'form', 'action' => 'post' ,'autocomplete' => 'off')) !!}


        {{ csrf_field() }}

        {{ Form::hidden('companyId', $companyId) }}
        
          <div class="form-group">
           <label>Choose Services:</label>
          </div>  

          <div class="form-group">
                     @foreach ($services as $value => $service)
                    {!! Form::checkbox('services[]', $service->id,  null, ['class' => 'quotePrice','price' => $service->price,'id' => 'service'.$value]) !!}
                    {!! Form::label('service' . $value, $service->serviceName .' (Price::'. $service->price.')') !!}<br>
                     @endforeach

                      @if ($errors->has('services'))
                             <span class="text-danger">{{ $errors->first('services') }}</span>
                      @endif
         </div>

          <div class="form-group">
            <label>Total:</label>
                 {!! Form::text('total', null, ['class' => 'form-control','required','id'=>'total']) !!}

                 @if ($errors->has('total'))
                             <span class="text-danger">{{ $errors->first('total') }}</span>
                 @endif
        </div>
       

        

        <div class="form-group">
                      {!! Form::submit('SEND QUOTE', array('class'=>'btn btn-success btn-submit')) !!} 
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
