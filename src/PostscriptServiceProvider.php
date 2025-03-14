<?php

namespace Astrogoat\Postscript;

use Astrogoat\Postscript\Settings\PostscriptSettings;
use Helix\Lego\Apps\App;
use Helix\Lego\Apps\AppPackageServiceProvider;
use Helix\Lego\Apps\Services\IncludeFrontendViews;
use Spatie\LaravelPackageTools\Package;

class PostscriptServiceProvider extends AppPackageServiceProvider
{
    public function registerApp(App $app): App
    {
        return $app
            ->name('postscript')
            ->settings(PostscriptSettings::class)
            ->migrations([
                __DIR__ . '/../database/migrations',
                __DIR__ . '/../database/migrations/settings',
            ])
            ->backendRoutes(__DIR__.'/../routes/backend.php')
            ->frontendRoutes(__DIR__.'/../routes/frontend.php')
            ->includeFrontendViews(function (IncludeFrontendViews $views) {
                return $views->addToHead(['postscript::script'], 100);
            });
    }

    public function configurePackage(Package $package): void
    {
        $package->name('postscript')->hasConfigFile()->hasViews();
    }
}
