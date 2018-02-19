@extends ('layouts.master')
@section ('content')
  <div class="close-modal" data-dismiss="modal">
    <div class="lr">
        <div class="rl"></div>
    </div>
  </div>
</div>
<div class="modal-body">
  <div class="container" align="center">
  <img src="img/portfolio/weather.png" class="img-responsive img-centered" alt="Weather">
    <div class="container">
    <div class="col-lg-8 col-lg-offset-2" style="text-align: center;">
	    <p>Check the weather of anywhere in the world with the Zip Code! This tool utilizes multiple APIs to decode the ZIP to Longitude and Latitude coordinates, grab the current weather, as well as a 5 day outlook and convert any times to the time zone of the Zip given. The APIs being used are Google's API for the location and OpenWeatherAPI for the weather data.
	    </p>
	    <br>
			<form class="form-inline" action="#" method="POST" id="weatherForm" name="weatherForm">
			<meta name="csrf-token" content="{{ csrf_token() }}">
			  {{ csrf_field() }}
			  <div class="form-group">
			    <label class="sr-only" for="ZipCode">Zip Code: </label>
			    	<div class="input-group">
			      		<div class="input-group-addon">Zip Code: 
			      		</div>
			      <input type="text" class="form-control" id="ZipCode" placeholder="Zip Code" name="ZipCode" required>
			  		</div>
			  </div>
			  <button type="submit" class="btn btn-success">Check Weather!</button>
			</form>
			  <div id="weather">
			  </div>
			  <br>

  <div class="modal-footer">
    <div class="clearfix text-center">
    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
    </div>
  </div>
  </div>
</div>

@include ('layouts.errors')
@endsection