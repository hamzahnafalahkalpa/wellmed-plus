<?php

namespace Projects\WellmedPlus\Controllers\API\Setting;

use Hanafalah\ModuleMedicalItem\Contracts\Schemas\MixUnit;
use Projects\WellmedPlus\Controllers\API\ApiController;
use Projects\WellmedPlus\Requests\API\Setting\MixUnit\{
    ViewRequest, StoreRequest, DeleteRequest
};

class MixUnitController extends ApiController{
    public function __construct(
        protected MixUnit $__mixunit_schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__mixunit_schema->viewMixUnitList();
    }

    public function store(StoreRequest $request){
        return $this->__mixunit_schema->storeMixUnit();
    }

    public function destroy(DeleteRequest $request){
        return $this->__mixunit_schema->deleteMixUnit();
    }
}