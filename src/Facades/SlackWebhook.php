<?php

namespace RyanChandler\SlackWebhook\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RyanChandler\SlackWebhook\SlackWebhook
 */
class SlackWebhook extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-slack-webhook';
    }
}
