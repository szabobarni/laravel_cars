<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:install ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call('migrate -n --force');
        $this->info('migrate');
        Artisan::call('db:seed');
        $this->info('seed');
        return Command::SUCCESS;
    }
}
