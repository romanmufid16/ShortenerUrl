<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UrlController extends Controller
{
    public function index() {
        return view('index');
    }

    public function store(Request $request){
        
        $request->validate([
            'original_url' => 'required|url',
            'alias' => 'nullable|string|max:20|unique:urls,short_code',
            'g-recaptcha-response' => 'required|captcha', 
        ]);
        
        // Logika untuk membuat short_code
        $shortCode = substr(md5($request->original_url . time()), 0, 6);
        $expire = Carbon::now()->addDays(7);
        
        // Simpan ke database
        DB::transaction(function () use ($request, $expire, $shortCode) {
            Url::create([
                'original_url' => $request->original_url,
                'short_code' => $request->alias ?: $shortCode,
                'expires_at' => $expire,
                'user_identifier' => session()->getId()
            ]);
        });

        return redirect('/')->with('success','Data added succesfully');
    }
}
