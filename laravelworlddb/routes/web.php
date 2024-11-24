<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\JessController;
 
Route::get('/user', [JessController::class, 'show']);

use Illuminate\Http\Request;

Route::get('/jessim/{name}/{age}/{pays}', function ($name, $age, $pays, Request $request) {

    $page = $request->input('page');
    return "Bienvenue sur la page de $name <br> Vous avez $age ans <br> Vous venez de $pays <br> Vous êtes sur la page $page";
})->where('name', '[A-Za-z]+')->where('age', '[0-9]+')->name('jessim');

use App\Http\Controllers\CountryController;

Route::get('/countries', [CountryController::class, 'show'])->name('countries.show');




Route::get('/countries/{code}/cities', [CountryController::class, 'showCities'])->name('countries.cities');


Route::get('/language-diversity', [CountryController::class, 'languageDiversity'])->name('countries.language_diversity');

Route::get('/languages-by-', [CountryController::class, 'languagesByContinent'])->name('countries.by_continent');