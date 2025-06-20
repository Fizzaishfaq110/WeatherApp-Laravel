# OpenWeatherApp - Laravel

This is a simple Laravel application that fetches real-time weather data using the OpenWeatherMap API. The app allows users to search for a city and displays its current weather information in a user-friendly format.

---

## Features

- Real-time weather data via OpenWeatherMap API
- Search weather by city name
- Simple, clean user interface with form input and result display
- Error handling for invalid city names or failed API calls

---

## Folder Structure

- **app/Services/CallApiService.php** — Handles API logic
- **app/Http/Controllers/WeatherController.php** — Handles requests and responses
- **resources/views/weather.blade.php** — Frontend UI
- **routes/web.php** — Route definitions
- **config/services.php** — Stores API config
- **public/css/style.css** — Styling

---

## API Source

You can generate the API key from [OpenWeatherMap API](https://openweathermap.org/api)

---
## How to Run the Project

Follow these steps to get the Laravel Weather App running locally:

1. **Clone the Repository**

```bash
git clone https://github.com/Fizzaishfaq110/WeatherApp-Laravel.git
```

2. **Install Dependencies**

```bash
composer install
```
3. **Create Environment File**

```bash
cp .env.example .env
```
4. **Add OpenWeatherMap API Key**

    In the .env file, add your API key:
```bash
OPENWEATHER_API_KEY=your_api_key_here
```

5.  **Visit in Browser**

a) **If using laravel herd:**
```bash
http://laravel-weather-app.test
```

b) **Or use Laravel's built-in server**

```bash
php artisan serve
```

And then go to browser: 

```bash
http://localhost:8000
```
