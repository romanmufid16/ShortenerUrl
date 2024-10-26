<?php

namespace App\Models;

use App\Models\UrlVisit;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class Url extends Model
{
    protected $fillable = [
        'original_url',
        'short_code',
        'expires_at',
        'user_identifier'
    ];

    public function urlvisit(){
        return $this->hasMany(UrlVisit::class);
    }
}
