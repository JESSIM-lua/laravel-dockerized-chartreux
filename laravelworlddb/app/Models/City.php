<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'city';
    protected $primaryKey = 'City_Id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = ['Name', 'CountryCode', 'District', 'Population'];

    public function country()
    {
        return $this->belongsTo(Country::class, 'CountryCode', 'Code');
    }
}
