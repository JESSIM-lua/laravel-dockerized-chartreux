<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
    public function show()
    {
        $countries = Country::all();

        return view('countries.index', ['countries' => $countries]);    }

     public function showCities($countryCode)
    {
        $country = Country::where('Code', $countryCode)->with('cities')->first();

        if (!$country) {
            bort(404, 'Pays introuvable');
    }

    return view('countries.cities', ['country' => $country]);
    }

    public function languageDiversity()
    {
        $countries = Country::withCount('languages')
            ->orderBy('languages_count', 'desc')->having('languages_count', '<', 5)
            ->get();

        return view('countries.language_diversity', ['countries' => $countries]);
    }


    public function languagesByContinent()
    {
        // Requête pour récupérer les langues officielles par continent
        $data = Country::with(['languages' => function ($query) {
            $query->where('IsOfficial', 'T');
        }])
        ->select('Continent', 'Name', 'Code')
        ->groupBy('Continent', 'Code', 'Name')
        ->get();

        // Passer les données à la vue
        return view('countries.by_continent', ['data' => $data]);
    }
   
}
