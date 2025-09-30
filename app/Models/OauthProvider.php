<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OauthProvider extends Model
{
    protected $fillable = [
        'user_id',
        'provider_name',
        'provider_user_id',
        'access_token',
        'refresh_token',
        'token_expires_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}