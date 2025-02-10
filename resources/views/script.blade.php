@if(\Astrogoat\Postscript\Settings\PostscriptSettings::isEnabled() && ! blank(settings('Astrogoat\\Postscript\\Settings\\PostscriptSettings', 'shop_id')))
    <script async src="https://sdk.postscript.io/sdk.bundle.js?shopId={{settings('Astrogoat\\Postscript\\Settings\\PostscriptSettings', 'shop_id')}}"></script>
    <script defer>
        window.addEventListener('item-added-to-cart', (event) => {
            window.postscript.event('add_to_cart', {
                "shop_id": {{ settings(Astrogoat\Postscript\Settings\PostscriptSettings::class, 'shop_id') }},
                "url": '{{ request()->url() }}',
                "search_params": {"variant": event.detail.id},
                "page_type": "product",
                "referrer": "{{ request()->headers->get('referer') }}",
                "resource": {
                    "category": event.detail.type,
                    "name": event.detail.title,
                    "price_in_cents": event.detail.price,
                    "resource_id": event.detail.product_id,
                    "resource_type": "product",
                    "sku": event.detail.sku,
                    "variant_id": event.detail.id,
                }
            });
        });

        function postscriptPageView(data) {
            window.addEventListener("postscriptReady", function(ev) {
                window.postscript.event('page_view', {
                    "shop_id": {{ settings(Astrogoat\Postscript\Settings\PostscriptSettings::class, 'shop_id') }},
                    "url": '{{ request()->url() }}',
                    "search_params": {"variant": data.variant_id},
                    "page_type": "product",
                    "referrer": "{{ request()->headers->get('referer') }}",
                    "resource": {
                        "category": data.type,
                        "name": data.name,
                        "price_in_cents": data.price,
                        "resource_id": data.product_id,
                        "resource_type": "product",
                        "sku": data.sku,
                        "variant_id": data.variant_id,
                    }
                });
            })
        }
    </script>
@endif
