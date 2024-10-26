<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Anhskohbo\NoCaptcha\Facades\NoCaptcha;
use Symfony\Component\HttpFoundation\Response;

class VerifyCaptcha
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!NoCaptcha::isValid($request->input('g-recaptcha-response'))) {
            return redirect()->back()->withErrors(['captcha' => 'Captcha tidak valid!']);
        }

        return $next($request);
    }
}
