<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the testing project';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        if (!env('APP_KEY')) {
            $this->call('key:generate');
        }
        $this->call('migrate:fresh', ['--seed' => true]);
        $this->call('make:filament-user');
    }
}
