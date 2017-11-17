@extends('base')

@section('content')


@endsection


@section('script')
<script type="text/javascript">
	var lat = $("#lat");
	var long = $("#long");
	function getLocation() {
	    if (navigator.geolocation) {
	        navigator.geolocation.getCurrentPosition(showPosition);
	    } else { 
	        label.innerHTML = "Geolocation is not supported by this browser.";
	    }
	}

	function showPosition(position) {
	    label.innerHTML = "Latitude: " + position.coords.latitude + 
	    "<br>Longitude: " + position.coords.longitude;
	}


</script>
@endsection