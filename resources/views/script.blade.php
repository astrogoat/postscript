@if(\Astrogoat\Postscript\Settings\PostscriptSettings::isEnabled() && ! blank(settings('Astrogoat\\Postscript\\Settings\\PostscriptSettings', 'shop_id')))
    <script async src="https://sdk.postscript.io/sdk.bundle.js?shopId={{settings('Astrogoat\\Postscript\\Settings\\PostscriptSettings', 'shop_id')}}"></script>
@endif
