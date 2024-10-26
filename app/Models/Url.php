<?php

namespace App\Models;

use App\Models\UrlVisit;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $fillable = [
        'original_url',
        'short_code',
        'expires_at'
    ];

    public function urlvisit(){
        return $this->hasMany(UrlVisit::class);
    }
}
