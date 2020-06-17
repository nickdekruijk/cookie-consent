@if (!cookieConsentAccepted() && !cookieConsentDenied())
<div class="cookieconsent-container">
    <div class="cookieconsent-explain">
        @lang('cookieconsent::cookieconsent.explain')
    </div>
    <a href="{{ route('cookieconsent', 'deny') }}" class="cookieconsent-close">&times;</a>
    <a href="{{ route('cookieconsent', 'accept') }}" class="cookieconsent-button cookieconsent-button-accept">@lang('cookieconsent::cookieconsent.accept')</a>
    <a href="@lang('cookieconsent::cookieconsent.moreinfo_link')" class="cookieconsent-button cookieconsent-button-moreinfo">@lang('cookieconsent::cookieconsent.moreinfo')</a>
</div>
@endif
