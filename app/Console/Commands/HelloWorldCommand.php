<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HelloWorldCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello:world {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hello world from Artisan';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Hello world ' . $this->argument('name'));
        return 0;
    }
}
