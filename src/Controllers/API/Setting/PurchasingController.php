<?php

namespace Projects\Klinik\Controllers\API\Setting;

use Hanafalah\ModuleProcurement\Contracts\Schemas\Purchasing;
use Projects\Klinik\Controllers\API\ApiController;
use Projects\Klinik\Requests\API\Setting\Purchasing\{
    StoreRequest
};

class PurchasingController extends ApiController{
    public function __construct(
        protected Purchasing $__schema
    ){
        parent::__construct();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storePurchasing();
    }
}