<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Consent Cookie Name
    |--------------------------------------------------------------------------
    |
    | Here you may change the name of the consent cookie that is created by
    | the package. 
    |
    */
    'cookie_name' => 'cookie_consent',

    /*
    |--------------------------------------------------------------------------
    | route_prefix
    |--------------------------------------------------------------------------
    |
    | Use this route to set the cookie. Default 'cookie_consent' will translate
    | into an url like https://domain.com/cookie_consent/accept or
    | https://domain.com/cookie_consent/deny
    |
    */
    'route_prefix' => 'cookieconsent',

    /*
    |--------------------------------------------------------------------------
    | Consent Cookie Expiration
    |--------------------------------------------------------------------------
    |
    | The cookie 'cookie_name' should last this amount of days
    |
    */
    'cookie_expires' => 365,

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only Consent Cookie
    |--------------------------------------------------------------------------
    |
    | By setting this option to true, cookie consent will only work if the 
    | browser has a HTTPS connection.
    |
    */
    'cookie_secure' => env('SESSION_SECURE_COOKIE', false),

    /*
    |--------------------------------------------------------------------------
    | HTTP Access Only
    |--------------------------------------------------------------------------
    |
    | Setting this value to true will prevent JavaScript from accessing the
    | value of the cookie and the cookie will only be accessible through
    | the HTTP protocol. It's unlikely you should disable this option.
    |
    */
    'cookie_httponly' => true,

];
