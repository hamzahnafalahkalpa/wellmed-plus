<?php

namespace Projects\Klinik\Controllers\API\Setting;

use Hanafalah\ModulePayment\Contracts\Schemas\Bank;
use Projects\Klinik\Controllers\API\ApiController;
use Projects\Klinik\Requests\API\Setting\Bank\{
    ViewRequest, StoreRequest, DeleteRequest
};

class BankController extends ApiController{
    public function __construct(
        protected Bank $__bank_schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__bank_schema->viewBankList();
    }

    public function store(StoreRequest $request){
        return $this->__bank_schema->storeBank();
    }

    public function destroy(DeleteRequest $request){
        return $this->__bank_schema->deleteBank();
    }
}