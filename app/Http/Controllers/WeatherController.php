<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Services\weatherService;
use App\Models\Student;

class WeatherController extends Controller
{

protected $weatherService;

public function __construct (WeatherService $weatherService)
{

$this->weatherService = $weatherService;

}

public function showweatherForm()
{
    return view('students.weather');
}


public function getWeather (Request $request)
{

$city = $request->input('city');
$weather = $this->weatherService->getCurrentWeather ($city); 
return view('students.weather', compact('weather', 'city'));
}
}