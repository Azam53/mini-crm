@extends('layouts.main')
@section('content')

  dd($services)
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

         
         <h3>Hi , customers </h3>

          <div class="form-group">
           <label>The list of services that you have approved are:</label>
          </div>  
           
           @php $counter = 1 @endphp

          <div class="form-group">
                     @foreach ($services as $value => $service)
                   
                      {{$counter}}] {{ $service->serviceName }} ( Price :: {{ $service->price }}  &euro; ) <br> 

                      @php $counter++ @endphp

                     @endforeach

                     <br><b>The totat cost:: {{$quote->total}} &euro;</b><br>  
                     
         </div>

          <div class="form-group">
            <label>Comment:</label>
                 {!! Form::text('comments', null, ['class' => 'form-control','required']) !!}

                 @if ($errors->has('comments'))
                             <span class="text-danger">{{ $errors->first('comments') }}</span>
                 @endif
          </div>
       

        

        <div class="form-group">
                      {!! Form::submit('SEND', array('class'=>'btn btn-success btn-submit')) !!} 
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
