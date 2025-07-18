<?php

namespace Elangosurya1998\ByteboxMediaManager\Commands;

use Illuminate\Console\Command;

class ByteboxMediaManagerCommand extends Command
{
    public $signature = 'bytebox-media-manager';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
