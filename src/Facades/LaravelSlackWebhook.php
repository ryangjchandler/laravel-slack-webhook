<?php

namespace RyanChandler\LaravelSlackWebhook\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RyanChandler\LaravelSlackWebhook\LaravelSlackWebhook
 */
class LaravelSlackWebhook extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-slack-webhook';
    }
}
