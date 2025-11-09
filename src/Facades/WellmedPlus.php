<?php

namespace Projects\WellmedPlus\Facades;

class WellmedPlus extends \Illuminate\Support\Facades\Facade
{
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor()
  {
    return \Projects\WellmedPlus\Contracts\WellmedPlus::class;
  }
}
