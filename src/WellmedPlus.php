<?php

namespace Projects\WellmedPlus;

use Illuminate\Database\Eloquent\Model;
use Hanafalah\LaravelSupport\{
    Concerns\Support\HasRepository,
    Supports\PackageManagement,
    Events as SupportEvents
};
use Projects\WellmedPlus\Contracts\WellmedPlus as ContractsWellmedPlus;

class WellmedPlus extends PackageManagement implements ContractsWellmedPlus{
    use Supports\LocalPath,HasRepository;

    const LOWER_CLASS_NAME = "wellmed-plus";
    const ID               = "1";

    public ?Model $model;

    public function events(){
        return [
            SupportEvents\InitializingEvent::class => [
                
            ],
            SupportEvents\EventInitialized::class  => [],
            SupportEvents\EndingEvent::class       => [],
            SupportEvents\EventEnded::class        => [],
            //ADD MORE EVENTS
        ];
    }

    protected function dir(): string{
        return __DIR__;
    }
}
