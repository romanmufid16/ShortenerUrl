<?php

namespace App\Models;

use App\Models\Url;
use Illuminate\Database\Eloquent\Model;

class UrlVisit extends Model
{
    protected $fillable = [
        'url_id',
        'visited_at',
        'ip_address',
        'user_agent'
    ];

    public function url(){
        return $this->belongsTo(Url::class);
    }
}
