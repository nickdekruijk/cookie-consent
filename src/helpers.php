<?php

if (!function_exists('cookieConsent')) {
    /**
     * Returns if the user has accepted cookies
     *
     * @return boolean
     */
    function cookieConsent()
    {
        return Cookie::get(config('cookieconsent.cookie_name'));
    }
}

if (!function_exists('cookieConsentAccepted')) {
    /**
     * Returns if the user has accepted cookies
     *
     * @return boolean
     */
    function cookieConsentAccepted()
    {
        return cookieConsent() == 'accept';
    }
}

if (!function_exists('cookieConsentDenied')) {
    /**
     * Returns if the user has denied cookies
     *
     * @return boolean
     */
    function cookieConsentDenied()
    {
        return cookieConsent() == 'deny';
    }
}
