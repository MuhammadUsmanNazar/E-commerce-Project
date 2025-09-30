<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubLocality extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'city_id', 'province_id', 'country_id',
        'name', 'slug', 'postal_code', 'latitude', 'longitude'
    ];

    // Relationships
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}