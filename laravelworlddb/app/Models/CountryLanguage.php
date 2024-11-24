<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryLanguage extends Model
{
    use HasFactory;

    protected $table = 'countrylanguage';
    protected $primaryKey = 'CountryLanguage_Id';
    public $timestamps = false;
    protected $fillable = ['CountryCode', 'Language', 'IsOfficial', 'Percentage'];
    public function country()
    {
        return $this->belongsTo(Country::class, 'CountryCode', 'Code');
    }
}
