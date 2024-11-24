<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'country';

    protected $primaryKey = 'Country_Id';

    public $incrementing = true;

    protected $keyType = 'int';

    public $timestamps = false;

    protected $fillable = [
        'Code',
        'Name',
        'Continent',
        'Region',
        'SurfaceArea',
        'IndepYear',
        'Population',
        'LifeExpectancy',
        'GNP',
        'GNPOld',
        'LocalName',
        'GovernmentForm',
        'HeadOfState',
        'Capital',
        'Code2',
        'Image1',
        'Image2'
    ];

    protected $casts = [
        'SurfaceArea' => 'float',
        'IndepYear' => 'integer',
        'Population' => 'integer',
        'LifeExpectancy' => 'float',
        'GNP' => 'float',
        'GNPOld' => 'float',
        'Capital' => 'integer',
    ];


    public function cities()
    {
    return $this->hasMany(City::class, 'CountryCode', 'Code');
    }


    public function languages()
    {
        return $this->hasMany(CountryLanguage::class, 'CountryCode', 'Code');
    }

}
