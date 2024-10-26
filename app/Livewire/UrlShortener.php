<?php

namespace App\Livewire;

use App\Models\Url;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UrlShortener extends Component
{
    public $original_url;
    public $alias;

    public function shortenUrl()
    {
        $this->validate([
            'original_url' => 'required|url',
            'alias' => 'nullable|string|max:20|unique:urls,short_code'
        ]);

        // Logika untuk membuat short_code
        $shortCode = substr(md5($this->original_url . time()), 0, 6);
        $expire = now()->addDays(7)->timestamp;

        // Simpan ke database
        DB::transaction(function () use ($expire, $shortCode) {
            Url::create([
                'original_url' => $this->original_url,
                'short_code' => $this->alias ?: $shortCode,
                'expires_at' => $expire,
                'user_identifier' => request()->ip()
            ]);
        });
    }

    public function render()
    {
        return view('livewire.url-shortener');
    }
}
