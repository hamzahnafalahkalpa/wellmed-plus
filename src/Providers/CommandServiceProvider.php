<?php

namespace Projects\Klinik\Providers;

use Illuminate\Support\ServiceProvider;
use Projects\Klinik\Commands;

class CommandServiceProvider extends ServiceProvider
{
    protected $__commands = [
        Commands\AddTenantCommand::class,
        Commands\GenerateCommand::class,
        Commands\ImpersonateCacheCommand::class,
        Commands\ImpersonateMigrateCommand::class,
        Commands\InstallMakeCommand::class,
        Commands\MigrateCommand::class,
        Commands\ModelMakeCommand::class,
        Commands\SeedCommand::class
    ];

    /**
     * Register the command.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(config('klinik.commands', $this->__commands));
    }

    public function provides()
    {
        return $this->__commands;
    }
}
