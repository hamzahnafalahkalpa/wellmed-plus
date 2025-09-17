<?php

namespace Projects\Klinik\Controllers\API\Setting;

use Hanafalah\ModuleItem\Contracts\Schemas\UnitOfMeasure;
use Projects\Klinik\Controllers\API\ApiController;
use Projects\Klinik\Requests\API\Setting\UnitOfMeasure\{
    ViewRequest, StoreRequest, DeleteRequest
};

class UnitOfMeasureController extends ApiController{
    public function __construct(
        protected UnitOfMeasure $__unitofmeasure_schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__unitofmeasure_schema->viewUnitOfMeasureList();
    }

    public function store(StoreRequest $request){
        return $this->__unitofmeasure_schema->storeUnitOfMeasure();
    }

    public function destroy(DeleteRequest $request){
        return $this->__unitofmeasure_schema->deleteUnitOfMeasure();
    }
}