<?php

namespace Projects\Klinik\Controllers\API\Setting;

use Hanafalah\ModuleItem\Contracts\Schemas\SupplyCategory;
use Projects\Klinik\Controllers\API\ApiController;
use Projects\Klinik\Requests\API\Setting\SupplyCategory\{
    ViewRequest, StoreRequest, DeleteRequest
};

class SupplyCategoryController extends ApiController{
    public function __construct(
        protected SupplyCategory $__schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__schema->viewSupplyCategoryList();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeSupplyCategory();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteSupplyCategory();
    }
}