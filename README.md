# Cookie Consent for Laravel
According to EU laws visitors should opt-in for all tracking cookies/pixels/code. This package adds a simple 'Accept Cookies' popup to your Laravel Application.

## Installation
To install package use
`composer require nickdekruijk/cookie-consent`

Publish the config file in case you want to customize it
```bash
php artisan vendor:publish --provider=NickDeKruijk\\CookieConsent\\CookieConsentServiceProvider
```

For Laravel version lower then 5.5 add the Service Provider to the `'providers'` array in `config/app.php`
```php
NickDeKruijk\CookieConsent\CookieConsentServiceProvider::class,
```

## Frontend
Add this to every view/page where you want to show the popup
```php
@include('cookieconsent::show')
```
And wrap any code that places tracking cookies/pixels/code with the `cookieConsentAccepted()` helper, for example like this:
```php
@if (cookieConsentAccepted())
// Your tracking code here
@endif
```
And style the popup as you like, for example:
```css
.cookieconsent-container {position:fixed;bottom:0;left:0;right:0;background-color:red;text-align:center;padding:50px;z-index:9999;color:#fff}
.cookieconsent-close {position:absolute;top:0;right:0;color:red;font-size:50px;padding:10px;line-height:.7;font-weight:bold;display:block}
.cookieconsent-button {display:inline-block;padding:10px 20px;border:2px solid #fff;border-radius:5px;text-decoration:none;color:inherit;margin:10px}
.cookieconsent-button:hover {background-color:rgba(255,255,255,0.5)}
.cookieconsent-button-accept {background-color:#fff;color:red}
.cookieconsent-button-accept:hover {background-color:rgba(255,255,255,0.8)}
```

## Changing text/localization
To change te tekst/buttons/info link copy the files from https://github.com/nickdekruijk/cookie-consent/tree/master/src/translations to /resources/lang/vendor/cookieconsent/ file and edit where needed.
