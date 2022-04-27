<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ArtisanExecutionTestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:artisan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Artisan hard executions test';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        \Log::info('Testing command execution...');

        return 'Testing command...';
    }
}
