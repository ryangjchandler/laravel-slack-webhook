<?php

namespace RyanChandler\SlackWebhook;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SlackWebhookServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-slack-webhook')
            ->hasConfigFile();
    }
}
