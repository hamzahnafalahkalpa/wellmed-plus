<?php

namespace Projects\Klinik\Controllers\API\Setting;

use Hanafalah\ModulePayment\Contracts\Schemas\CoaType;
use Projects\Klinik\Controllers\API\ApiController;
use Projects\Klinik\Requests\API\Setting\CoaType\{
    ViewRequest, StoreRequest, DeleteRequest
};

class CoaTypeController extends ApiController{
    public function __construct(
        protected CoaType $__coa_type_schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__coa_type_schema->viewCoaTypeList();
    }

    public function store(StoreRequest $request){
        return $this->__coa_type_schema->storeCoaType();
    }

    public function destroy(DeleteRequest $request){
        return $this->__coa_type_schema->deleteCoaType();
    }
}