<br>
<h3 align="center">Current Weather for {{ $name }} ({{ $zip }}):</h3>
<div class='col-md-5 col-sm-5 col-lg-5' style='float: left;''>
<h4 align="center">{{ ucwords($weathermain) }}<img src="{{ $iconurl}}">{{ $temp }}&deg;F</h4>
    <table class="table table-striped table-bordered table-responsive">
<tr>
	<td>Humidity:</td>
	<td>{{ $humidity }}%</td>
</tr>
<tr>
	<td>Low: </td>
	<td>{{ $temp_low }}&deg;F</td>
</tr>
<tr>
	<td>High: </td>
	<td>{{ $temp_high }}&deg;F</td>
</tr>
<tr>
	<td>Sunrise: </td>
	<td>{{ $sunrise }}</td>
</tr>
<tr>
	<td>Sunset: </td>
	<td>{{ $sunset }}</td>
</tr>
</table>
<br>
<br>
<br>
<p align="center">
*This data has been gathered using <a href="https://openweathermap.org/api" target="_blank">OpenWeatherMap API</a>. See <a href="https://openweathermap.org/forecast5" target="_blank">Here</a> for more information.
</p>
</div>
<div class="clearfix">
<div class="col-md-6 col-sm-6 col-lg-6" style="float: right;">
<h4 align="center">5 Day Forecast:</h4>
<br>
    <table class="table table-striped table-bordered table-responsive">
    @foreach ($forecastdata as $forecastday)
		<tr>
			<td>{{ $forecastday[0] }} <img src="http://openweathermap.org/img/w/{{ $forecastday[4] }}.png"></td>
			<td>Low: {{ $forecastday[1] }}&deg;F</td>
			<td>High: {{ $forecastday[2] }}&deg;F</td>
			<td>
			@if (($forecastday[3]) == 'sky is clear')
				Clear Sky
			@elseif (($forecastday[3]) == 'scattered clouds')
				Cloudy
			@else
				{{ ucwords($forecastday[3]) }}
			@endif
			</td>
		</tr>
@endforeach
	</table>
</div>
</div>
<br>
<br>