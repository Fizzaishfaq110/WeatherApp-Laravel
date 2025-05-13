<?php
namespace App\Http\Controllers;

use App\Services\CallApiService;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    protected CallApiService $apiService;

    //Adding Constructor
    public function __construct(CallApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    //Creating the Index Method
    public function index(Request $request)
    {
        $city        = $request->query('city', ''); // Default to empty string
        $weatherData = [];                          // Initialize as empty array
        $error       = null;                        // Initialize as null
        if (! empty($city)) {
            try {
                $weatherData = $this->apiService->getWeather($city);
                if (empty($weatherData)) {
                    $error = 'City not found or API error';
                }
            } catch (\Exception $e) {
                $error = 'Error fetching weather data: ' . $e->getMessage();
            }
        }

        return view('weather', [

            'city'        => $city,
            'weatherData' => $weatherData,
            'error'       => $error,

        ]);
    }
}
