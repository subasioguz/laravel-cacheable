<?php

namespace Fowitech\Cacheable\Commands;

use Illuminate\Console\Command;

class CacheableCommand extends Command
{
    public $signature = 'laravel-cacheable';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
