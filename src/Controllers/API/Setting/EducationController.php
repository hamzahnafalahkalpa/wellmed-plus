<?php

namespace Projects\WellmedPlus\Controllers\API\Setting;

use Hanafalah\ModulePeople\Contracts\Schemas\Education;
use Projects\WellmedPlus\Controllers\API\ApiController;
use Projects\WellmedPlus\Requests\API\Setting\Education\{
    ViewRequest, StoreRequest, DeleteRequest
};

class EducationController extends ApiController{
    public function __construct(
        protected Education $__schema
    ){}

    public function index(ViewRequest $request){
        return $this->__schema->viewEducationList();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeEducation();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteEducation();
    }
}
