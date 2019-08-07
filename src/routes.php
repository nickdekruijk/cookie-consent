<?php

// Set login and logout routes if not present and required
if (config('cookieconsent.route_prefix')) {
    Route::group(['middleware' => 'web'], function () {
        Route::get(config('cookieconsent.route_prefix').'/{value?}', '\NickDeKruijk\CookieConsent\CookieConsentController@set')->name('cookieconsent');
    });
}

