<!DOCTYPE html>
<html>

<body>

	@php $counter = 1 @endphp

	<h3>Hi , customers</h3>

	<p>The list of services that you have approved are:</p>

	 @foreach ($services as $key => $service)
                             
              {{ $counter }}] {{$service->serviceName}} (Price::{{$service->price}} &euro;)<br>
              @php $counter++ @endphp

     @endforeach   

     <br><b>The totat cost:: {{$total}} &euro;</b><br><br>


    <!-- <a href='https://minicrm.staging-server.nl/showQuotation/{{$quoteId}}'> click on the below link to show interest  </a>-->

     <a href="{{URL::to('/')}}/showQuotation/{{ $quoteId }}">click here to go ahead</a>




</body>
</html>