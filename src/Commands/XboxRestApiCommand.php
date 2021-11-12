<?php

namespace Neznam\XboxRestApi\Commands;

use Illuminate\Console\Command;

class XboxRestApiCommand extends Command
{
    public $signature = 'xbox-rest-api';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
