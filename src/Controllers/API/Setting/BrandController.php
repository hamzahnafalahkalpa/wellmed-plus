<?php

namespace Projects\Klinik\Controllers\API\Setting;

use Hanafalah\ModuleItem\Contracts\Schemas\Brand;
use Projects\Klinik\Controllers\API\ApiController;
use Projects\Klinik\Requests\API\Setting\Brand\{
    ViewRequest, StoreRequest, DeleteRequest
};

class BrandController extends ApiController{
    public function __construct(
        protected Brand $__brand_schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__brand_schema->viewBrandList();
    }

    public function store(StoreRequest $request){
        return $this->__brand_schema->storeBrand();
    }

    public function destroy(DeleteRequest $request){
        return $this->__brand_schema->deleteBrand();
    }
}