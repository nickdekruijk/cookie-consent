<?php

namespace NickDeKruijk\CookieConsent;

use Route;

class CookieConsentController extends \App\Http\Controllers\Controller
{
    public function set($value = null)
    {
        return back()->cookie(config('cookieconsent.cookie_name'), $value, config('cookieconsent.cookie_expires') * 60 * 24, "", "", config('cookieconsent.cookie_secure'), config('cookieconsent.cookie_httponly'));
    }
}
