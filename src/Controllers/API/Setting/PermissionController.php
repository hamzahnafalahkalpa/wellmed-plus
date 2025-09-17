<?php

namespace Projects\Klinik\Controllers\API\Setting;

use Hanafalah\LaravelPermission\Contracts\Schemas\Permission;
use Projects\Klinik\Controllers\API\ApiController;
use Projects\Klinik\Requests\API\Setting\Permission\{
    ViewRequest
};

class PermissionController extends ApiController{
    public function __construct(
        protected Permission $__permission_schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__permission_schema->viewPermissionList();
    }
}