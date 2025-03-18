@if (!cookieConsentAccepted() && !cookieConsentDenied())
    <div class="cookieconsent-container">
        <div class="cookieconsent-explain">
            @lang('cookieconsent::cookieconsent.explain')
        </div>
        <a href="{{ route('cookieconsent', 'accept') }}" autofocus aria-label="@lang('cookieconsent::cookieconsent.accept_aria')" class="cookieconsent-button cookieconsent-button-accept">@lang('cookieconsent::cookieconsent.accept')</a>
        <a href="@lang('cookieconsent::cookieconsent.moreinfo_link')" aria-label="@lang('cookieconsent::cookieconsent.moreinfo_aria')" class="cookieconsent-button cookieconsent-button-moreinfo">@lang('cookieconsent::cookieconsent.moreinfo')</a>
        <a href="{{ route('cookieconsent', 'deny') }}" class="cookieconsent-close" aria-label="@lang('cookieconsent::cookieconsent.close_aria')">@lang('cookieconsent::cookieconsent.close')</a>
    </div>
@endif
