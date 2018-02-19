<?php

namespace WrightWayWeb\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use TimeController\get_nearest_timezone;
use View;

class WeatherController extends Controller
{
    public function index() {
        return view('weather.index');
    }

    public function getWeather() {
        $postcode= request('ZipCode');
            
            if ($postcode)
            {
                $address = urlencode($postcode);
                $url='http://maps.googleapis.com/maps/api/geocode/json?address='.$address.'&sensor=false';
                $ch = curl_init(); 
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_URL, $url);
                $data = curl_exec($ch);
                curl_close($ch);
                $source = $data;
                $obj = json_decode($source);
                $lat = $obj->results[0]->geometry->location->lat;
                // return $lat;
                $long = $obj->results[0]->geometry->location->lng;
                // return $long;
                }
            $longitude=$long;
            $latitude=$lat;
        $weatherurl = "api.openweathermap.org/data/2.5/weather?lat=$latitude&lon=$longitude&units=imperial&APPID=bec86f49d4966f2f3c7bf52677be243e";
        $chweather = curl_init();
        curl_setopt($chweather, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($chweather, CURLOPT_URL, $weatherurl);
        $data = curl_exec($chweather);
        curl_close($chweather);
        $source = $data;
        $obj = json_decode($source);
        
        return $obj;
    }

    public function getTimeZone()
    {
        $data = $this->getWeather();
        $time = new TimeController;
        $timezone = $time::get_nearest_timezone($data->coord->lat, $data->coord->lon, $data->sys->country);
        return $timezone;
    }

    public function getSunTimes()
    {
        $data = $this->getWeather();
        $timezone = $this->getTimeZone();
        $sunset = $data->sys->sunset;
        $sunrise = $data->sys->sunrise;
        $sunset = DateTime::createFromFormat('U', $sunset);
        $sunset->setTimeZone(new \DateTimeZone($timezone));
        $sunset = $sunset->format('g:i A');
        $sunrise = DateTime::createFromFormat('U', $sunrise);
        $sunrise->setTimeZone(new \DateTimeZone($timezone));
        $sunrise = $sunrise->format('g:i A');
        $times = ["sunrise" => $sunrise,
                 "sunset" => $sunset];
        return $times;
    }
    
    public function getForecast()
    {
        if ($postcode= request('ZipCode'))
        {
            $address = urlencode($postcode);
            $url     = "http://maps.googleapis.com/maps/api/geocode/json?address={$address}&sensor=false";
            $ch      = curl_init(); 

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_URL, $url);
            
            $data = curl_exec($ch);
            
            curl_close($ch);
            
            $source = $data;
            $obj    = json_decode($source);
            $lat    = $obj->results[0]->geometry->location->lat;
            $long   = $obj->results[0]->geometry->location->lng;
            
        }
        $longitude  = $long;
        $latitude   = $lat;
        $weatherurl = "api.openweathermap.org/data/2.5/forecast/daily?lat=$latitude&lon=$longitude&units=imperial&cnt=5&APPID=bec86f49d4966f2f3c7bf52677be243e";
        $chweather  = curl_init();

        curl_setopt($chweather, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($chweather, CURLOPT_URL, $weatherurl);
        
        $data = curl_exec($chweather);
        
        curl_close($chweather);
        
        $source    = $data;
        $obj       = json_decode($source);
        $data      = $obj->list;
        $timezone  = $this->getTimeZone();
        $daysfinal = [];

        foreach ($data as $forecastdays => $days)
        {
            $day      = DateTime::createFromFormat('U', $days->dt)->format('M d');
            $day->setTimeZone(new \DateTimeZone($timezone));
            $temp_min = round($days->temp->min);
            $temp_max = round($days->temp->max);
            $weather  = $days->weather[0]->description;
            $dayicon  = $days->weather[0]->icon;
            $daysdata = [$day, $temp_min, $temp_max, $weather, $dayicon];

            array_push($daysfinal, $daysdata);
        }

        return $daysfinal;
    }

    public function showWeather ()
    {
        $weatherdata  = $this->getWeather();
        $forecastdata = $this->getForecast();
        $zip          = request('ZipCode');
        $time         = $this->getSunTimes();
        $sunset       = $time['sunset'];
        $sunrise      = $time['sunrise'];
        $temp         = round($weatherdata->main->temp);
        $humidity     = $weatherdata->main->humidity;
        $temp_low     = round($weatherdata->main->temp_min);
        $temp_high    = round($weatherdata->main->temp_max);
        $weathermain  = $weatherdata->weather[0]->description;
        $name         = $weatherdata->name;
        $icon         = $weatherdata->weather[0]->icon;
        $iconurl      = "http://openweathermap.org/img/w/{$icon}.png";
        $payload      = (String) view('weather.getweather', compact('sunrise', 'sunset', 'temp', 'humidity', 'temp_low', 'temp_high', 'weathermain', 'name', 'iconurl', 'zip', 'forecastdata'))->render();
        
        return response()->json($payload, 200);
    }
}
