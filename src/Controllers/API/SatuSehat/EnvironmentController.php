<?php

namespace Projects\WellmedPlus\Controllers\API\SatuSehat;

use Hanafalah\SatuSehat\Contracts\Schemas\OAuth2;
use Projects\WellmedPlus\Controllers\API\ApiController;

class EnvironmentController extends ApiController{
    public function __construct(
        public OAuth2 $__oauth
    ){
        parent::__construct();
    }
}