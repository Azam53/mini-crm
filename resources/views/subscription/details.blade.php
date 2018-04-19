@extends('layouts.main')
@section('content')


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Subscriptions</h1>
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
                            <h4> <i class="fa fa-random fa-fw"></i>Subscription Destail Tab - {{$subscription[0]->name}}</h4>
                            <div class="pull-right">
                                
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                   
                                   @foreach($subscription as $subscription)
                                   
                                   Service Name : {{ $subscription->serviceName }}<br>

                                   Start date   : {{ date('d M Y',strtotime($subscription->startDate)) }}<br>

                                   End date     : {{ date('d M Y',strtotime($subscription->endDate)) }}<br>

                                   Price        : {{ $subscription->price }}<br>
 
                                   Rate         : {{ (!empty($subscription->rate))? $subscription->rate : 0}}<br>

                                   Discount     : {{ $subscription->discount }}%<br>

                                   @endforeach
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
