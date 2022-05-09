<?php

namespace RyanChandler\LaravelSlackWebhook\Commands;

use Illuminate\Console\Command;

class LaravelSlackWebhookCommand extends Command
{
    public $signature = 'laravel-slack-webhook';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
