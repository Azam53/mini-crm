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
                                    
    {!! Form::open(array('route' => 'store.comment', 'class' => 'form', 'action' => 'post' ,'autocomplete' => 'off')) !!}


        {{ csrf_field() }}

         {{ Form::hidden('companyId', $quote->companyId) }}

       <!-- depth is previous record id to keep track of all comments-->

         {{ Form::hidden('depth', $quote->id) }}

       <!-- keeping track of total from last record -->
       
         {{ Form::hidden('total', $quote->total) }}  

      <!-- keeping track of services from last record -->
       
         {{ Form::hidden('services', $quote->services) }}    

          @if($quote->subscribedStatus == 1)
                   <span class='label label-danger label-as-badge pull-right'>Subscribed</span><br>
          @endif 

          <span class='badge badge-primary' >SuperAdmin</span><br>
         
         <h3>Hi , customer </h3>

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
         
          <!-- <div class="form-group">

            <label>Comments:</label>
            
          </div> -->
          

        @if(!empty($comments))
          <div class="form-group">
                     @foreach ($comments as $comment)

                       @if($comment->role == 1)

                        <span class='badge badge-primary pull-right' >SuperAdmin</span><br>
                           <textarea class="form-control" rows="4" id="comment" readonly>{{$comment->comments}}</textarea><br>

                       @else

                         <span class='label label-info label-as-badge pull-left'>Customer</span><br>
                         <textarea class="form-control" rows="4" id="comment" readonly>{{$comment->comments}}</textarea><br>

                       @endif  

                     @endforeach
          </div>
        @endif    
        
         @if($quote->subscribedStatus == 0)
          <div class="form-group">

               <span class='label label-info label-as-badge pull-left'>Customer</span><br>
            
                 {!! Form::textarea('comments', null, ['class' => 'form-control','required']) !!}

                 @if ($errors->has('comments'))
                             <span class="text-danger">{{ $errors->first('comments') }}</span>
                 @endif
          </div>
       

        

        <div class="form-group">

                      {!! Form::submit('SEND', array('class'=>'btn btn-success btn-submit')) !!} 

        </div>
         @endif


       {!! Form::close() !!}

      @if($quote->subscribedStatus == 0)
             <!-- Subscription form start-->

              {!! Form::open(array('route' => 'quote.subscribed', 'class' => 'form', 'action' => 'post' ,'autocomplete' => 'off')) !!}

                {{ csrf_field() }}

               {{ Form::hidden('companyId', $quote->companyId) }}

               {{ Form::hidden('services', $service_array) }}

               {{ Form::hidden('quoteId', $quote->id) }}

                <div class="form-group pull-right">
                            
                           {!! Form::submit('Subscribe', array('class'=>'btn btn-danger btn-submit')) !!} 
              </div>  

              {!! Form::close() !!}

             <!-- Subscription form end-->

       @endif

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
