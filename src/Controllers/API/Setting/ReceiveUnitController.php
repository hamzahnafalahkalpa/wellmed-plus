<?php

namespace Projects\WellmedPlus\Controllers\API\Setting;

use Hanafalah\ModuleProcurement\Contracts\Schemas\ReceiveUnit;
use Projects\WellmedPlus\Controllers\API\ApiController;
use Projects\WellmedPlus\Requests\API\Setting\ReceiveUnit\{
    ViewRequest, StoreRequest, DeleteRequest
};

class ReceiveUnitController extends ApiController{
    public function __construct(
        protected ReceiveUnit $__schema    
    ){}

    public function index(ViewRequest $request){
        return $this->__schema->viewReceiveUnitList();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeReceiveUnit();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteReceiveUnit();
    }
}