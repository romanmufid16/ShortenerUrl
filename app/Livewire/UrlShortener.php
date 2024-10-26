<?php

namespace App\Livewire;

use App\Models\Url;
use Livewire\Component;

class UrlShortener extends Component
{
    public $originalUrl;
    public $shortUrl;

    public function shortenUrl()
    {
        $this->validate([
            'originalUrl' => 'required|url',
            'alias' => 'string'
        ]);

        // Logika untuk membuat short_code
        $shortCode = substr(md5($this->originalUrl . time()), 0, 6);
        $this->shortUrl = url($shortCode);

        // Simpan ke database
        Url::create([
            'original_url' => $this->originalUrl,
            'short_code' => $shortCode,
        ]);
    }
    public function render()
    {
        return view('livewire.url-shortener');
    }
}
