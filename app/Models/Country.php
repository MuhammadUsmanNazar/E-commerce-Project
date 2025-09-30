<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'short_name', 'iso2_code',
        'currency_code', 'currency_symbol', 'currency_name',
        'phone_code', 'continent', 'flag_svg_url',
        'time_zone', 'default_language', 'week_start_day',
        'latitude', 'longitude'
    ];

    // Relationships
    public function provinces()
    {
        return $this->hasMany(Province::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function subLocalities()
    {
        return $this->hasMany(SubLocality::class);
    }
}