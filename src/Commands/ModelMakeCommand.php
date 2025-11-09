<?php

namespace Projects\WellmedPlus\Commands;

use Hanafalah\LaravelPackageGenerator\Commands\ModelMakeCommand as CommandsModelMakeCommand;

class ModelMakeCommand extends CommandsModelMakeCommand
{
    protected $signature = 'wellmed-plus:make-model 
                {name}
                {--pattern= : Pattern yang digunakan}
                {--class-basename= : Nama class yang digunakan}';
}