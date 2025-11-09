<?php

namespace Projects\WellmedPlus\Commands;

use Hanafalah\LaravelPackageGenerator\Commands\GeneratePackageCommand;

class GenerateCommand extends GeneratePackageCommand
{
    protected $signature = 'wellmed-plus:add-package {namespace}
        {--package-author= : Nama author}
        {--package-email= : Email author}
        {--pattern= : Pattern yang digunakan}';

    public function handle(): void
    {
        parent::handle();
    }
}