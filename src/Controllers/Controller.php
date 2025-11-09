<?php

namespace Projects\WellmedPlus\Controllers;

use App\Http\Controllers\Controller as MainController;
use Projects\WellmedPlus\Concerns\HasUser;

abstract class Controller extends MainController
{
    use HasUser;
}
