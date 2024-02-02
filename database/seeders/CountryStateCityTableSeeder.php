<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\DataProviders\CountryDataProvider;
use App\DataProviders\StateDataProvider;
use App\DataProviders\CityDataProvider;

class CountryStateCityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::insertOrIgnore(CountryDataProvider::data());
        State::insertOrIgnore(StateDataProvider::data());

        $cityData = CityDataProvider::data();

        // Chunk the city data and insert in batches
        $chunkSize = 1000; // Adjust this value as needed
        foreach (array_chunk($cityData, $chunkSize) as $chunkCities) {
            City::insertOrIgnore($chunkCities);
        }
    }
}
