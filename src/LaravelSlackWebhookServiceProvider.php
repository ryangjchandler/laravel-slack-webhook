<?php

namespace RyanChandler\LaravelSlackWebhook;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use RyanChandler\LaravelSlackWebhook\Commands\LaravelSlackWebhookCommand;

class LaravelSlackWebhookServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-slack-webhook')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-slack-webhook_table')
            ->hasCommand(LaravelSlackWebhookCommand::class);
    }
}
