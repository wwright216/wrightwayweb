<?php

namespace WrightWayWeb\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use TimeController\get_nearest_timezone;
use View;

class WeatherController extends Controller
{
    private $latitude  = 0;
    private $longitude = 0;
    private $timezone  = null;
    private $country   = '';

    public function index() {
        return view('weather.index');
    }


    private function setLocation($postcode = 0)
    {
        $return = false;

        if ($postcode) {
            $url = "https://maps.googleapis.com/maps/api/geocode/json?address={$postcode}&sensor=false&key=AIzaSyBdDECs9PpEuxLB4wqmIDjYcDGpERs8ZT4";
            $ch  = curl_init();

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_URL, $url);

            $obj = json_decode(curl_exec($ch));

            foreach ($obj->results as $results) {
                $this->latitude  = $results->geometry->location->lat;
                $this->longitude = $results->geometry->location->lng;
                $this->country   = $results->address_components[4]->short_name;

                curl_close($ch);

                $return = true;
                break;
            }
            
        }

        return $return;
    }

    protected function getWeather()
    {        
        $data = json_encode(array());

        if ($this->longitude && $this->latitude) {
            $weatherurl = 'api.openweathermap.org/data/2.5/weather?lat=' . $this->latitude .'&lon=' . $this->longitude .'&units=imperial&APPID=bec86f49d4966f2f3c7bf52677be243e';
            $chweather  = curl_init();
            
            curl_setopt($chweather, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($chweather, CURLOPT_URL, $weatherurl);
            
            $data = curl_exec($chweather);

            curl_close($chweather);
        }

        return json_decode($data);
    }

    protected function getTimeZone()
    {
        $time           = new TimeController;
        $this->timezone = $time::get_nearest_timezone($this->latitude, $this->longitude, $this->country);
    }

    protected function getSunTimes($data)
    {
        $sunset  = DateTime::createFromFormat('U', $data->sys->sunset);
        $sunset->setTimeZone(new \DateTimeZone($this->timezone));
        $sunset  = $sunset->format('g:i A');

        $sunrise = DateTime::createFromFormat('U', $data->sys->sunrise);
        $sunrise->setTimeZone(new \DateTimeZone($this->timezone));
        $sunrise = $sunrise->format('g:i A');

        return [
            'sunrise' => $sunrise,
            'sunset'  => $sunset
        ];
    }

    protected function getForecast()
    {
        $weatherurl = "api.openweathermap.org/data/2.5/forecast/daily?lat={$this->latitude}&lon={$this->longitude}&units=imperial&cnt=5&APPID=bec86f49d4966f2f3c7bf52677be243e";
        $chweather  = curl_init();

        curl_setopt($chweather, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($chweather, CURLOPT_URL, $weatherurl);
        
        $data = curl_exec($chweather);
        
        curl_close($chweather);
        
        $source    = $data;
        $obj       = json_decode($source);
        $data      = $obj->list;
        $daysfinal = [];

        foreach ($data as $forecastdays => $days) {
            $day      = DateTime::createFromFormat('U', $days->dt)->format('M d');
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
        if ($this->setLocation(request('ZipCode'))) {
            $weatherdata  = $this->getWeather();
            $this->getTimeZone();
            $forecastdata = $this->getForecast();
            $zip          = request('ZipCode');
            $time         = $this->getSunTimes($weatherdata);
            $sunset       = $time['sunset'];
            $sunrise      = $time['sunrise'];
            $temp         = round($weatherdata->main->temp);
            $humidity     = $weatherdata->main->humidity;
            $temp_low     = round($weatherdata->main->temp_min);
            $temp_high    = round($weatherdata->main->temp_max);
            $weathermain  = $weatherdata->weather[0]->description;
            $name         = $weatherdata->name;
            $icon         = $weatherdata->weather[0]->icon;
            $iconurl      = "http://openweathermap.org/img/w/$icon.png";
            $payload      = (String) view('weather.getweather', compact('sunrise', 'sunset', 'temp', 'humidity', 'temp_low', 'temp_high', 'weathermain', 'name', 'iconurl', 'zip', 'forecastdata'))->render();
            
            return response()->json($payload, 200);
        }
    }
}
