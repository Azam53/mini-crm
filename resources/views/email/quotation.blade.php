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

     <br><b>The totat cost:: {{$total}} &euro;</b><br>  


     <a href='http://localhost:8000/showQuotation/{{$quoteId}}'> click on the below link to show interest  </a>




</body>
</html>