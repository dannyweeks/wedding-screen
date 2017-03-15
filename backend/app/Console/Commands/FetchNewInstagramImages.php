<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FetchNewInstagramImages extends Command
{
    /**
     * Command name
     *
     * @var string
     */
    protected $name = 'app:get-instagram-images';

    /**
     * @var string
     */
    protected $description = 'Fetch new instagram images';

    /**
     * Run the command
     */
    public function handle()
    {
        $this->info('fetching instagram images....');
    }
}