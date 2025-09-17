<?php

namespace Projects\Klinik\Controllers\API\Setting\Examination;

use Hanafalah\ModuleExamination\Contracts\Schemas\VitalSignStuff;
use Projects\Klinik\Controllers\API\ApiController;
use Projects\Klinik\Requests\API\Setting\Examination\VitalSignStuff\{
    ViewRequest, StoreRequest
};

class VitalSignStuffController extends ApiController{
    public function __construct(
        protected VitalSignStuff $__schema
    ){}

    public function index(ViewRequest $request){
        return $this->__schema->viewVitalSignStuffList();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeVitalSignStuff();
    }
}
