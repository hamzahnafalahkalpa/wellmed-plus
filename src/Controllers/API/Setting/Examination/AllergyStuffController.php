<?php

namespace Projects\WellmedPlus\Controllers\API\Setting\Examination;

use Hanafalah\ModuleExamination\Contracts\Schemas\AllergyStuff;
use Projects\WellmedPlus\Controllers\API\ApiController;
use Projects\WellmedPlus\Requests\API\Setting\Examination\AllergyStuff\{
    ViewRequest, StoreRequest, DeleteRequest
};

class AllergyStuffController extends ApiController{
    public function __construct(
        protected AllergyStuff $__schema
    ){}

    public function index(ViewRequest $request){
        return $this->__schema->viewAllergyStuffList();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeAllergyStuff();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteAllergyStuff();
    }
}
