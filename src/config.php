<?php

return [

    /*
    |--------------------------------------------------------------------------
    | cookie_name
    |--------------------------------------------------------------------------
    | Name of the cookie to use
    */
    'cookie_name' => 'cookie_consent',

    /*
    |--------------------------------------------------------------------------
    | route_prefix
    |--------------------------------------------------------------------------
    | Use this route to set the cookie. Default 'cookie_consent' will translate
    | into an url like https://domain.com/cookie_consent/accept or
    | https://domain.com/cookie_consent/deny
    */
    'route_prefix' => 'cookieconsent',

    /*
    |--------------------------------------------------------------------------
    | cookie_expires
    |--------------------------------------------------------------------------
    | The cookie 'cookie_name' should last this amount of days
    */
    'cookie_expires' => 365,

];
