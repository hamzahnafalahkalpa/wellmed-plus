<?php

namespace Projects\WellmedPlus\Controllers\API\Setting;

use Hanafalah\ModuleEmployee\Contracts\Schemas\Shift;
use Projects\WellmedPlus\Controllers\API\ApiController;
use Projects\WellmedPlus\Requests\API\Setting\Shift\{
    ViewRequest, StoreRequest, DeleteRequest
};

class ShiftController extends ApiController{
    public function __construct(
        protected Shift $__schema    
    ){}

    public function index(ViewRequest $request){
        return $this->__schema->viewShiftList();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeShift();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteShift();
    }
}